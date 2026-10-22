<?php

namespace JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Actions\DeleteAction as TableDeleteAction;
use Illuminate\Support\Facades\Storage;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource;
use JeffersonGoncalves\Filament\ZapSign\ZapSignPlugin;
use JeffersonGoncalves\ZapSign\Exceptions\ZapSignException;
use JeffersonGoncalves\ZapSign\Facades\ZapSign;
use JeffersonGoncalves\ZapSign\Jobs\CreateDocument;
use JeffersonGoncalves\ZapSign\Jobs\SyncDocument;
use JeffersonGoncalves\ZapSign\Models\Document;

/**
 * Actions shared by the documents table and the view page
 * (Filament 3: pass the Tables\Actions class for the table, the default for pages).
 */
class DocumentActions
{
    /** Upload a file and queue it to ZapSign (CreateDocument job). */
    public static function send(): Action
    {
        $plugin = ZapSignPlugin::current();

        return Action::make('send')
            ->label(__('filament-zapsign::zapsign.actions.send'))
            ->icon('heroicon-o-paper-airplane')
            ->modalWidth('4xl')
            ->form([
                TextInput::make('name')->label(DocumentResource::field('name'))->required()->maxLength(255),
                FileUpload::make('file')
                    ->label(DocumentResource::field('file'))
                    ->required()
                    ->disk($plugin->getDisk())
                    ->directory($plugin->getDirectory())
                    ->visibility('private')
                    ->acceptedFileTypes(['application/pdf', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                    ->maxSize(10240),
                Select::make('lang')
                    ->label(DocumentResource::field('lang'))
                    ->options(['pt-br' => 'Português (Brasil)', 'en' => 'English', 'es' => 'Español', 'fr' => 'Français'])
                    ->default('pt-br')
                    ->required(),
                Repeater::make('signers')
                    ->label(DocumentResource::field('signers'))
                    ->required()
                    ->minItems(1)
                    ->defaultItems(1)
                    ->columns(3)
                    ->schema(static::signerFields()),
                DatePicker::make('date_limit_to_sign')->label(DocumentResource::field('date_limit_to_sign'))->minDate(today()),
                Toggle::make('signature_order_active')->label(DocumentResource::field('signature_order_active')),
            ])
            ->action(function (array $data) use ($plugin): void {
                CreateDocument::dispatch(
                    static::clean([
                        'name' => $data['name'],
                        'lang' => $data['lang'] ?? null,
                        'date_limit_to_sign' => $data['date_limit_to_sign'] ?? null,
                        'signature_order_active' => (bool) ($data['signature_order_active'] ?? false),
                        'signers' => collect($data['signers'])->map(fn (array $signer): array => static::clean($signer))->values()->all(),
                    ]),
                    null,
                    (string) $data['file'],
                    $plugin->getDisk(),
                );

                Notification::make()->success()->title(__('filament-zapsign::zapsign.notifications.queued'))->send();
            });
    }

    /**
     * Refresh the document and its signers from the API (SyncDocument job).
     *
     * @param  class-string<Action|TableAction>  $class
     */
    public static function sync(string $class = Action::class): Action|TableAction
    {
        return $class::make('sync')
            ->label(__('filament-zapsign::zapsign.actions.sync'))
            ->icon('heroicon-o-arrow-path')
            ->color('gray')
            ->action(function (Document $record): void {
                SyncDocument::dispatch($record->token);

                Notification::make()->success()->title(__('filament-zapsign::zapsign.notifications.synced'))->send();
            });
    }

    /**
     * The stored copy when laravel-zapsign keeps one, otherwise a fresh link (ZapSign links expire after 60 minutes).
     *
     * @param  class-string<Action|TableAction>  $class
     */
    public static function download(string $class = Action::class): Action|TableAction
    {
        return $class::make('download')
            ->label(__('filament-zapsign::zapsign.actions.download'))
            ->icon('heroicon-o-arrow-down-tray')
            ->color('success')
            ->visible(fn (Document $record): bool => $record->isSigned())
            ->action(fn (Document $record) => static::downloadResponse($record));
    }

    /** Refuse the document at ZapSign; the status follows with the doc_refused webhook. */
    public static function cancel(): Action
    {
        return Action::make('cancel')
            ->label(__('filament-zapsign::zapsign.actions.cancel'))
            ->icon('heroicon-o-x-circle')
            ->color('danger')
            ->visible(fn (Document $record): bool => $record->status === Document::STATUS_PENDING)
            ->form([
                Textarea::make('reason')->label(__('filament-zapsign::zapsign.cancel.reason'))->required()->rows(2),
                Toggle::make('notify_signers')->label(__('filament-zapsign::zapsign.cancel.notify_signers')),
            ])
            ->action(function (Document $record, array $data): void {
                try {
                    ZapSign::cancelDocument($record->token, (string) $data['reason'], (bool) ($data['notify_signers'] ?? false));
                } catch (ZapSignException $e) {
                    static::failed($e);

                    return;
                }

                Notification::make()->success()->title(__('filament-zapsign::zapsign.notifications.cancel_requested'))->send();
            });
    }

    /**
     * Delete at ZapSign first; the local row is only removed when the API agrees.
     *
     * @param  class-string<DeleteAction|TableDeleteAction>  $class
     */
    public static function delete(string $class = DeleteAction::class): DeleteAction|TableDeleteAction
    {
        return $class::make()
            ->before(function (Document $record, DeleteAction|TableDeleteAction $action): void {
                try {
                    ZapSign::deleteDocument($record->token);
                } catch (ZapSignException $e) {
                    static::failed($e);

                    $action->cancel();
                }
            });
    }

    /** @return array<int, mixed> */
    public static function signerFields(): array
    {
        return [
            TextInput::make('name')->label(static::signerField('name'))->required()->maxLength(255),
            TextInput::make('email')->label(static::signerField('email'))->email(),
            Select::make('auth_mode')
                ->label(static::signerField('auth_mode'))
                ->options(static::authModes())
                ->default('assinaturaTela')
                ->required(),
            TextInput::make('phone_country')->label(static::signerField('phone_country'))->default('55')->maxLength(4),
            TextInput::make('phone_number')->label(static::signerField('phone_number'))->tel(),
            Toggle::make('send_automatic_email')->label(static::signerField('send_automatic_email'))->inline(false),
        ];
    }

    /** @return array<string, string> */
    public static function authModes(): array
    {
        return collect([
            'assinaturaTela',
            'tokenEmail',
            'assinaturaTela-tokenEmail',
            'tokenSms',
            'assinaturaTela-tokenSms',
            'tokenWhatsapp',
            'assinaturaTela-tokenWhatsapp',
            'certificadoDigital',
        ])->mapWithKeys(fn (string $mode): array => [$mode => __("filament-zapsign::zapsign.auth_modes.{$mode}")])->all();
    }

    /**
     * Drop empty values so ZapSign applies its own defaults.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    public static function clean(array $data): array
    {
        return array_filter($data, fn ($value) => $value !== null && $value !== '');
    }

    public static function failed(ZapSignException $e): void
    {
        Notification::make()
            ->danger()
            ->title(__('filament-zapsign::zapsign.notifications.failed'))
            ->body($e->getMessage())
            ->send();
    }

    protected static function signerField(string $name): string
    {
        return __("filament-zapsign::zapsign.signer.fields.{$name}");
    }

    protected static function downloadResponse(Document $record): mixed
    {
        $disk = config('zapsign.files.disk');

        if (filled($record->signed_file_path) && filled($disk)) {
            return Storage::disk((string) $disk)->download((string) $record->signed_file_path, ($record->name ?: $record->token).'.pdf');
        }

        try {
            $document = Document::sync(ZapSign::document($record->token));
        } catch (ZapSignException $e) {
            static::failed($e);

            return null;
        }

        return filled($document->signed_file) ? redirect()->away((string) $document->signed_file) : null;
    }
}

<?php

namespace JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\RelationManagers;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\DocumentActions;
use JeffersonGoncalves\ZapSign\Exceptions\ZapSignException;
use JeffersonGoncalves\ZapSign\Facades\ZapSign;
use JeffersonGoncalves\ZapSign\Models\Document;
use JeffersonGoncalves\ZapSign\Models\Signer;

class SignersRelationManager extends RelationManager
{
    protected static string $relationship = 'signers';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('filament-zapsign::zapsign.signer.plural_label');
    }

    public function isReadOnly(): bool
    {
        // Only the custom actions below are offered; there is no create/edit form.
        return false;
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->modelLabel(__('filament-zapsign::zapsign.signer.label'))
            ->pluralModelLabel(__('filament-zapsign::zapsign.signer.plural_label'))
            ->columns([
                TextColumn::make('name')->label(static::field('name'))->placeholder('-'),
                TextColumn::make('email')->label(static::field('email'))->placeholder('-'),
                TextColumn::make('phone')->label(static::field('phone'))->placeholder('-')->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label(static::field('status'))
                    ->badge()
                    ->color(fn (?string $state): string => $state === 'signed' ? 'success' : 'gray')
                    ->formatStateUsing(fn (?string $state): string => static::statusLabel((string) $state)),
                TextColumn::make('sign_url')->label(static::field('sign_url'))->copyable()->limit(30)->placeholder('-'),
                TextColumn::make('times_viewed')->label(static::field('times_viewed'))->numeric(),
                TextColumn::make('last_view_at')->label(static::field('last_view_at'))->dateTime()->placeholder('-'),
                TextColumn::make('signed_at')->label(static::field('signed_at'))->dateTime()->placeholder('-'),
            ])
            ->headerActions([
                Action::make('addSigner')
                    ->label(__('filament-zapsign::zapsign.actions.add_signer'))
                    ->icon('heroicon-o-user-plus')
                    ->modalWidth('3xl')
                    ->visible(fn (): bool => $this->document()->status === Document::STATUS_PENDING)
                    ->schema(DocumentActions::signerFields())
                    ->action(function (array $data): void {
                        try {
                            Signer::sync($this->document(), ZapSign::addSigner($this->document()->token, DocumentActions::clean($data)));
                        } catch (ZapSignException $e) {
                            DocumentActions::failed($e);

                            return;
                        }

                        Notification::make()->success()->title(__('filament-zapsign::zapsign.notifications.signer_added'))->send();
                    }),
            ])
            ->recordActions([
                Action::make('removeSigner')
                    ->label(__('filament-zapsign::zapsign.actions.remove_signer'))
                    ->icon('heroicon-o-user-minus')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(fn (Signer $record): bool => ! $record->hasSigned() && $this->document()->status === Document::STATUS_PENDING)
                    ->action(function (Signer $record): void {
                        try {
                            ZapSign::deleteSigner($record->token);
                        } catch (ZapSignException $e) {
                            DocumentActions::failed($e);

                            return;
                        }

                        $record->delete();

                        Notification::make()->success()->title(__('filament-zapsign::zapsign.notifications.signer_removed'))->send();
                    }),
            ]);
    }

    protected function document(): Document
    {
        /** @var Document $document */
        $document = $this->getOwnerRecord();

        return $document;
    }

    protected static function field(string $name): string
    {
        return __("filament-zapsign::zapsign.signer.fields.{$name}");
    }

    /** ZapSign statuses (`new`, `link-opened`, `signed`); unknown ones are shown as sent. */
    protected static function statusLabel(string $status): string
    {
        $key = "filament-zapsign::zapsign.signer.status.{$status}";
        $label = __($key);

        return $label === $key ? $status : $label;
    }
}

<?php

use Filament\Facades\Filament;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Client\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\Pages\ListDocuments;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\Pages\ViewDocument;
use JeffersonGoncalves\Filament\ZapSign\Resources\DocumentResource\RelationManagers\SignersRelationManager;
use JeffersonGoncalves\Filament\ZapSign\Resources\WebhookCallResource\Pages\ListWebhookCalls;
use JeffersonGoncalves\ZapSign\Jobs\CreateDocument;
use JeffersonGoncalves\ZapSign\Jobs\ProcessWebhookCall;
use JeffersonGoncalves\ZapSign\Jobs\SyncDocument;
use JeffersonGoncalves\ZapSign\Models\Document;
use JeffersonGoncalves\ZapSign\Models\Signer;
use JeffersonGoncalves\ZapSign\Models\WebhookCall;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));

    $this->actingAs(User::query()->forceCreate(['name' => 'Ana']));

    $this->document = Document::sync([
        'token' => 'doc-1',
        'name' => 'Contract',
        'status' => 'pending',
        'signers' => [
            ['token' => 'sig-1', 'name' => 'Ana', 'email' => 'ana@example.com', 'status' => 'signed', 'signed_at' => '2025-01-01T10:00:00Z'],
            ['token' => 'sig-2', 'name' => 'Bia', 'email' => 'bia@example.com', 'status' => 'new', 'sign_url' => 'https://app.zapsign.co/verificar/sig-2'],
        ],
    ]);
});

it('lists documents with signed counts and filters by status', function () {
    $signed = Document::sync(['token' => 'doc-2', 'name' => 'Signed one', 'status' => 'signed', 'signers' => [['token' => 'sig-3', 'name' => 'Caio', 'signed_at' => '2025-01-01T10:00:00Z']]]);

    Livewire::test(ListDocuments::class)
        ->assertCanSeeTableRecords([$this->document, $signed])
        ->assertSee('1/2')
        ->filterTable('status', Document::STATUS_SIGNED)
        ->assertCanSeeTableRecords([$signed])
        ->assertCanNotSeeTableRecords([$this->document]);
});

it('queues the upload from the send action', function () {
    Storage::fake('local');
    Queue::fake([CreateDocument::class]);

    // Filament 3 keys repeater items by UUID and merges action data into the default item: set the items directly.
    Livewire::test(ListDocuments::class)
        ->mountAction('send')
        ->set('mountedActionsData.0.signers', [
            'a' => ['name' => 'Client', 'email' => 'client@example.com', 'auth_mode' => 'assinaturaTela', 'phone_country' => '55', 'phone_number' => null, 'send_automatic_email' => true],
        ])
        ->setActionData([
            'name' => 'Service contract',
            'file' => UploadedFile::fake()->create('contract.pdf', 10, 'application/pdf'),
            'lang' => 'pt-br',
        ])
        ->callMountedAction()
        ->assertHasNoActionErrors();

    Queue::assertPushed(CreateDocument::class, fn (CreateDocument $job) => $job->data['name'] === 'Service contract'
        && $job->disk === 'local'
        && Storage::disk('local')->exists((string) $job->path)
        && $job->data['signers'] === [['name' => 'Client', 'email' => 'client@example.com', 'auth_mode' => 'assinaturaTela', 'phone_country' => '55', 'send_automatic_email' => true]]);
});

it('requires a name for each signer', function () {
    Storage::fake('local');
    Queue::fake([CreateDocument::class]);

    Livewire::test(ListDocuments::class)
        ->mountAction('send')
        ->set('mountedActionsData.0.signers', ['a' => ['name' => null, 'auth_mode' => 'assinaturaTela']])
        ->setActionData([
            'name' => 'Service contract',
            'file' => UploadedFile::fake()->create('contract.pdf', 10, 'application/pdf'),
        ])
        ->callMountedAction()
        ->assertHasActionErrors(['signers.a.name' => 'required']);

    Queue::assertNothingPushed();
});

it('queues a sync from the table', function () {
    Queue::fake([SyncDocument::class]);

    Livewire::test(ListDocuments::class)->callTableAction('sync', $this->document);

    Queue::assertPushed(SyncDocument::class, fn (SyncDocument $job) => $job->token === 'doc-1');
});

it('cancels the document at ZapSign', function () {
    Http::fake(['*' => Http::response(['message' => 'ok'])]);

    Livewire::test(ViewDocument::class, ['record' => $this->document->getRouteKey()])
        ->callAction('cancel', data: ['reason' => 'Wrong value', 'notify_signers' => true])
        ->assertHasNoActionErrors();

    Http::assertSent(fn (Request $request) => str_ends_with($request->url(), '/api/v1/refuse/')
        && $request['doc_token'] === 'doc-1'
        && $request['rejected_reason'] === 'Wrong value'
        && $request['notify_signer'] === true);
});

it('deletes at ZapSign before deleting locally', function () {
    Http::fake(['*' => Http::response([])]);

    Livewire::test(ViewDocument::class, ['record' => $this->document->getRouteKey()])->callAction('delete');

    Http::assertSent(fn (Request $request) => $request->method() === 'DELETE' && str_ends_with($request->url(), '/api/v1/docs/doc-1/'));
    expect($this->document->fresh()->trashed())->toBeTrue();
});

it('keeps the document when ZapSign refuses the delete', function () {
    Http::fake(['*' => Http::response(['detail' => 'Not found.'], 404)]);

    Livewire::test(ListDocuments::class)->callTableAction('delete', $this->document);

    expect($this->document->fresh()->trashed())->toBeFalse();
});

it('downloads a fresh signed file link', function () {
    $this->document->update(['status' => Document::STATUS_SIGNED]);
    Http::fake(['*' => Http::response(['token' => 'doc-1', 'status' => 'signed', 'signed_file' => 'https://files/signed.pdf'])]);

    Livewire::test(ViewDocument::class, ['record' => $this->document->getRouteKey()])
        ->callAction('download')
        ->assertRedirect('https://files/signed.pdf');
});

it('adds and removes signers', function () {
    Http::fake([
        '*/add-signer/' => Http::response(['token' => 'sig-9', 'name' => 'Witness', 'status' => 'new']),
        '*/remove/' => Http::response([]),
    ]);

    $open = Signer::query()->where('token', 'sig-2')->firstOrFail();

    Livewire::test(SignersRelationManager::class, ['ownerRecord' => $this->document, 'pageClass' => ViewDocument::class])
        ->assertCanSeeTableRecords($this->document->signers)
        ->assertTableActionHidden('removeSigner', Signer::query()->where('token', 'sig-1')->firstOrFail())
        ->callTableAction('addSigner', data: ['name' => 'Witness', 'auth_mode' => 'assinaturaTela'])
        ->callTableAction('removeSigner', $open);

    Http::assertSent(fn (Request $request) => str_ends_with($request->url(), '/docs/doc-1/add-signer/') && $request['name'] === 'Witness');
    expect($this->document->signers()->pluck('token')->all())->toEqualCanonicalizing(['sig-1', 'sig-9']);
});

it('lists and reprocesses webhook calls', function () {
    Queue::fake([ProcessWebhookCall::class]);

    $call = WebhookCall::query()->create(['hash' => sha1('x'), 'event_type' => 'doc_signed', 'document_token' => 'doc-1', 'payload' => ['event_type' => 'doc_signed'], 'exception' => 'boom']);

    Livewire::test(ListWebhookCalls::class)
        ->assertCanSeeTableRecords([$call])
        ->callTableAction('reprocess', $call);

    expect($call->fresh()->exception)->toBeNull();
    Queue::assertPushed(ProcessWebhookCall::class);
});

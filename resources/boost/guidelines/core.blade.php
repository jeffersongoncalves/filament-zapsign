## Filament ZapSign

Filament resources for ZapSign e-signatures (documents, signers, webhook calls) on top of jeffersongoncalves/laravel-zapsign.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-zapsign:"^1.0"
php artisan vendor:publish --tag="zapsign-migrations"
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\ZapSign\ZapSignPlugin;

$panel->plugins([
    ZapSignPlugin::make()
        // ->navigationGroup('Contracts')
        // ->disk('s3')
        // ->webhookCalls(false)
        ,
]);
</code-snippet>
@endverbatim

### Architecture
- `DocumentResource` (list + view, signers relation manager) and `WebhookCallResource` over the laravel-zapsign models
- "Send document" dispatches `JeffersonGoncalves\ZapSign\Jobs\CreateDocument`; "Sync" dispatches `SyncDocument`; cancel and delete call the API before touching local rows
- Translations under `filament-zapsign::zapsign.*`

### Best Practices
- Run a queue worker and configure `ZAPSIGN_WEBHOOK_SECRET` so statuses update without manual syncs
- Set `ZAPSIGN_FILES_DISK` to keep signed PDFs (ZapSign links expire after 60 minutes)
- Restrict access with policies on `Document` and `WebhookCall`

<div class="filament-hidden">

![Filament ZapSign](https://raw.githubusercontent.com/jeffersongoncalves/filament-zapsign/1.x/art/jeffersongoncalves-filament-zapsign.png)

</div>

# Filament ZapSign

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-zapsign.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-zapsign)
[![PHP Version](https://img.shields.io/packagist/dependency-v/jeffersongoncalves/filament-zapsign/php.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-zapsign)
[![Tests](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-zapsign/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-zapsign/actions?query=workflow%3ATests+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-zapsign.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-zapsign)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-zapsign.svg?style=flat-square)](LICENSE.md)

Send documents for **e-signature with [ZapSign](https://zapsign.com.br)** from your Filament panel and follow every signer until the document is done.

Built on [jeffersongoncalves/laravel-zapsign](https://github.com/jeffersongoncalves/laravel-zapsign), which holds the API client (rate limited to ZapSign's 500 requests/minute), the database tables, the queued jobs and the webhook route.

## Features

- **Send document** — upload a PDF or DOCX, pick the language, add signers (name, email, phone, authentication mode, email delivery), a deadline and the signing order. The upload runs on the queue (`CreateDocument`), so the rate limit never blocks the panel.
- **Documents** — status (pending, signed, refused), signed/total counter, external ID, sandbox flag, linked model, refusal reason, filters by status and sandbox.
- **Signers** — status, copyable signature links, views, signed time; **add** and **remove** signers while the document is pending.
- **Signed PDF** download (the stored copy, or a fresh link — ZapSign links expire after 60 minutes), **sync** from the API, **cancel** with a reason, and **delete** (at ZapSign first, then locally).
- **Webhook calls** — every webhook received, its payload, errors and a **reprocess** action.
- **19 languages**, Filament 3, 4 and 5.

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-zapsign:"^1.0"
php artisan vendor:publish --tag="zapsign-config"
php artisan vendor:publish --tag="zapsign-migrations"
php artisan migrate
```

Configure the API token (and the webhook secret to receive status updates) — see [laravel-zapsign](https://github.com/jeffersongoncalves/laravel-zapsign#installation):

```dotenv
ZAPSIGN_TOKEN=your-token
ZAPSIGN_WEBHOOK_SECRET=a-long-random-string
# Keep a copy of every signed PDF:
ZAPSIGN_FILES_DISK=s3
```

Run a queue worker: sending, syncing and webhook processing are queued jobs.

Register the plugin in your panel provider:

```php
use JeffersonGoncalves\Filament\ZapSign\ZapSignPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            ZapSignPlugin::make()
                // ->navigationGroup('Contracts')
                // ->disk('s3')            // where uploads are stored (default: the panel's default disk)
                // ->directory('zapsign')  // directory on that disk
                // ->webhookCalls(false)   // hide the "Webhook calls" resource
                ,
        ]);
}
```

## Usage

- **Documents → Send document** queues the upload. The document shows up in the list once ZapSign has received it, and its status follows the webhooks (`doc_signed`, `doc_refused`, `doc_deleted`, ...).
- Without webhooks, use **Sync** on a document (or dispatch `SyncDocument` on a schedule) to refresh it from the API.
- To link documents to your own models, dispatch `CreateDocument` with `documentable:` from your code (see laravel-zapsign); the document page shows the linked record.

Access follows your policies for `JeffersonGoncalves\ZapSign\Models\Document` and `WebhookCall`, like any Filament resource.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

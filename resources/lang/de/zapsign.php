<?php

return [
    'document' => [
        'label' => 'Dokument',
        'plural_label' => 'Dokumente',
        'fields' => [
            'name' => 'Name',
            'status' => 'Status',
            'signers' => 'Unterzeichner',
            'sandbox' => 'Sandbox',
            'token' => 'ZapSign-Token',
            'external_id' => 'Externe ID',
            'documentable' => 'Verknüpft mit',
            'created_at' => 'Erstellt am',
            'finished_at' => 'Abgeschlossen am',
            'file' => 'Datei (PDF oder DOCX)',
            'lang' => 'Sprache',
            'date_limit_to_sign' => 'Unterschreiben bis',
            'signature_order_active' => 'In der obigen Reihenfolge unterschreiben',
            'rejected_reason' => 'Ablehnungsgrund',
        ],
        'status' => [
            'pending' => 'Ausstehend',
            'signed' => 'Unterschrieben',
            'refused' => 'Abgelehnt',
        ],
    ],

    'signer' => [
        'label' => 'Unterzeichner',
        'plural_label' => 'Unterzeichner',
        'fields' => [
            'name' => 'Name',
            'email' => 'E-Mail',
            'phone' => 'Telefon',
            'phone_country' => 'Ländervorwahl',
            'phone_number' => 'Telefonnummer',
            'auth_mode' => 'Authentifizierung',
            'send_automatic_email' => 'Per E-Mail senden',
            'status' => 'Status',
            'sign_url' => 'Signaturlink',
            'times_viewed' => 'Aufrufe',
            'last_view_at' => 'Zuletzt angesehen am',
            'signed_at' => 'Unterschrieben am',
        ],
        'status' => [
            'new' => 'Neu',
            'link-opened' => 'Link geöffnet',
            'signed' => 'Unterschrieben',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Unterschrift auf dem Bildschirm',
        'tokenEmail' => 'Code per E-Mail',
        'assinaturaTela-tokenEmail' => 'Bildschirmunterschrift + Code per E-Mail',
        'tokenSms' => 'Code per SMS',
        'assinaturaTela-tokenSms' => 'Bildschirmunterschrift + Code per SMS',
        'tokenWhatsapp' => 'Code per WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Bildschirmunterschrift + Code per WhatsApp',
        'certificadoDigital' => 'Digitales Zertifikat',
    ],

    'cancel' => [
        'reason' => 'Grund',
        'notify_signers' => 'Unterzeichner per E-Mail benachrichtigen',
    ],

    'webhook_call' => [
        'label' => 'Webhook-Aufruf',
        'plural_label' => 'Webhook-Aufrufe',
        'fields' => [
            'event_type' => 'Ereignis',
            'document_token' => 'Dokument',
            'processed' => 'Verarbeitet',
            'exception' => 'Fehler',
            'created_at' => 'Empfangen am',
        ],
        'filters' => [
            'failed' => 'Fehlgeschlagen',
        ],
    ],

    'actions' => [
        'send' => 'Dokument senden',
        'sync' => 'Synchronisieren',
        'download' => 'Unterschriebenes PDF',
        'cancel' => 'Stornieren',
        'add_signer' => 'Unterzeichner hinzufügen',
        'remove_signer' => 'Entfernen',
        'reprocess' => 'Erneut verarbeiten',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Dokument in der Warteschlange: Es erscheint hier, sobald ZapSign es erhalten hat.',
        'synced' => 'Synchronisierung in der Warteschlange.',
        'cancel_requested' => 'Stornierung angefordert: Der Status wird aktualisiert, sobald ZapSign sie bestätigt.',
        'signer_added' => 'Unterzeichner hinzugefügt.',
        'signer_removed' => 'Unterzeichner entfernt.',
        'reprocessed' => 'Webhook zur Verarbeitung eingereiht.',
        'failed' => 'ZapSign hat einen Fehler zurückgegeben',
    ],
];

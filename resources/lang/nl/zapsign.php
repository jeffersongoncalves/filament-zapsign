<?php

return [
    'document' => [
        'label' => 'Document',
        'plural_label' => 'Documenten',
        'fields' => [
            'name' => 'Naam',
            'status' => 'Status',
            'signers' => 'Ondertekenaars',
            'sandbox' => 'Sandbox',
            'token' => 'ZapSign-token',
            'external_id' => 'Extern ID',
            'documentable' => 'Gekoppeld aan',
            'created_at' => 'Aangemaakt op',
            'finished_at' => 'Afgerond op',
            'file' => 'Bestand (PDF of DOCX)',
            'lang' => 'Taal',
            'date_limit_to_sign' => 'Ondertekenen vóór',
            'signature_order_active' => 'Ondertekenen in de volgorde hierboven',
            'rejected_reason' => 'Reden van weigering',
        ],
        'status' => [
            'pending' => 'In afwachting',
            'signed' => 'Ondertekend',
            'refused' => 'Geweigerd',
        ],
    ],

    'signer' => [
        'label' => 'Ondertekenaar',
        'plural_label' => 'Ondertekenaars',
        'fields' => [
            'name' => 'Naam',
            'email' => 'E-mail',
            'phone' => 'Telefoon',
            'phone_country' => 'Landcode',
            'phone_number' => 'Telefoonnummer',
            'auth_mode' => 'Authenticatie',
            'send_automatic_email' => 'Per e-mail versturen',
            'status' => 'Status',
            'sign_url' => 'Ondertekeningslink',
            'times_viewed' => 'Weergaven',
            'last_view_at' => 'Laatst bekeken op',
            'signed_at' => 'Ondertekend op',
        ],
        'status' => [
            'new' => 'Nieuw',
            'link-opened' => 'Link geopend',
            'signed' => 'Ondertekend',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Handtekening op het scherm',
        'tokenEmail' => 'Code per e-mail',
        'assinaturaTela-tokenEmail' => 'Schermhandtekening + code per e-mail',
        'tokenSms' => 'Code per sms',
        'assinaturaTela-tokenSms' => 'Schermhandtekening + code per sms',
        'tokenWhatsapp' => 'Code via WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Schermhandtekening + code via WhatsApp',
        'certificadoDigital' => 'Digitaal certificaat',
    ],

    'cancel' => [
        'reason' => 'Reden',
        'notify_signers' => 'Ondertekenaars per e-mail informeren',
    ],

    'webhook_call' => [
        'label' => 'Webhook-aanroep',
        'plural_label' => 'Webhook-aanroepen',
        'fields' => [
            'event_type' => 'Gebeurtenis',
            'document_token' => 'Document',
            'processed' => 'Verwerkt',
            'exception' => 'Fout',
            'created_at' => 'Ontvangen op',
        ],
        'filters' => [
            'failed' => 'Mislukt',
        ],
    ],

    'actions' => [
        'send' => 'Document versturen',
        'sync' => 'Synchroniseren',
        'download' => 'Ondertekende PDF',
        'cancel' => 'Annuleren',
        'add_signer' => 'Ondertekenaar toevoegen',
        'remove_signer' => 'Verwijderen',
        'reprocess' => 'Opnieuw verwerken',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Document in de wachtrij: het verschijnt hier zodra ZapSign het heeft ontvangen.',
        'synced' => 'Synchronisatie in de wachtrij.',
        'cancel_requested' => 'Annulering aangevraagd: de status wordt bijgewerkt zodra ZapSign deze bevestigt.',
        'signer_added' => 'Ondertekenaar toegevoegd.',
        'signer_removed' => 'Ondertekenaar verwijderd.',
        'reprocessed' => 'Webhook in de wachtrij voor verwerking.',
        'failed' => 'ZapSign gaf een fout terug',
    ],
];

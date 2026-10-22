<?php

return [
    'document' => [
        'label' => 'Document',
        'plural_label' => 'Documents',
        'fields' => [
            'name' => 'Name',
            'status' => 'Status',
            'signers' => 'Signers',
            'sandbox' => 'Sandbox',
            'token' => 'ZapSign token',
            'external_id' => 'External ID',
            'documentable' => 'Linked to',
            'created_at' => 'Created at',
            'finished_at' => 'Finished at',
            'file' => 'File (PDF or DOCX)',
            'lang' => 'Language',
            'date_limit_to_sign' => 'Sign by',
            'signature_order_active' => 'Sign in the order above',
            'rejected_reason' => 'Refusal reason',
        ],
        'status' => [
            'pending' => 'Pending',
            'signed' => 'Signed',
            'refused' => 'Refused',
        ],
    ],

    'signer' => [
        'label' => 'Signer',
        'plural_label' => 'Signers',
        'fields' => [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'phone_country' => 'Country code',
            'phone_number' => 'Phone number',
            'auth_mode' => 'Authentication',
            'send_automatic_email' => 'Send by email',
            'status' => 'Status',
            'sign_url' => 'Signature link',
            'times_viewed' => 'Views',
            'last_view_at' => 'Last viewed at',
            'signed_at' => 'Signed at',
        ],
        'status' => [
            'new' => 'New',
            'link-opened' => 'Link opened',
            'signed' => 'Signed',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'On-screen signature',
        'tokenEmail' => 'Email code',
        'assinaturaTela-tokenEmail' => 'On-screen signature + email code',
        'tokenSms' => 'SMS code',
        'assinaturaTela-tokenSms' => 'On-screen signature + SMS code',
        'tokenWhatsapp' => 'WhatsApp code',
        'assinaturaTela-tokenWhatsapp' => 'On-screen signature + WhatsApp code',
        'certificadoDigital' => 'Digital certificate',
    ],

    'cancel' => [
        'reason' => 'Reason',
        'notify_signers' => 'Notify signers by email',
    ],

    'webhook_call' => [
        'label' => 'Webhook call',
        'plural_label' => 'Webhook calls',
        'fields' => [
            'event_type' => 'Event',
            'document_token' => 'Document',
            'processed' => 'Processed',
            'exception' => 'Error',
            'created_at' => 'Received at',
        ],
        'filters' => [
            'failed' => 'Failed',
        ],
    ],

    'actions' => [
        'send' => 'Send document',
        'sync' => 'Sync',
        'download' => 'Signed PDF',
        'cancel' => 'Cancel',
        'add_signer' => 'Add signer',
        'remove_signer' => 'Remove',
        'reprocess' => 'Reprocess',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Document queued: it shows up here once ZapSign has received it.',
        'synced' => 'Sync queued.',
        'cancel_requested' => 'Cancellation requested: the status updates when ZapSign confirms it.',
        'signer_added' => 'Signer added.',
        'signer_removed' => 'Signer removed.',
        'reprocessed' => 'Webhook queued for processing.',
        'failed' => 'ZapSign returned an error',
    ],
];

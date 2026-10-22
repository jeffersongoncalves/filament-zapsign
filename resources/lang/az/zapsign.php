<?php

return [
    'document' => [
        'label' => 'Sənəd',
        'plural_label' => 'Sənədlər',
        'fields' => [
            'name' => 'Ad',
            'status' => 'Status',
            'signers' => 'İmzalayanlar',
            'sandbox' => 'Sandbox',
            'token' => 'ZapSign tokeni',
            'external_id' => 'Xarici ID',
            'documentable' => 'Bağlıdır',
            'created_at' => 'Yaradılma tarixi',
            'finished_at' => 'Tamamlanma tarixi',
            'file' => 'Fayl (PDF və ya DOCX)',
            'lang' => 'Dil',
            'date_limit_to_sign' => 'İmza üçün son tarix',
            'signature_order_active' => 'Yuxarıdakı ardıcıllıqla imzala',
            'rejected_reason' => 'İmtina səbəbi',
        ],
        'status' => [
            'pending' => 'Gözləyir',
            'signed' => 'İmzalanıb',
            'refused' => 'İmtina edilib',
        ],
    ],

    'signer' => [
        'label' => 'İmzalayan',
        'plural_label' => 'İmzalayanlar',
        'fields' => [
            'name' => 'Ad',
            'email' => 'E-poçt',
            'phone' => 'Telefon',
            'phone_country' => 'Ölkə kodu',
            'phone_number' => 'Telefon nömrəsi',
            'auth_mode' => 'Autentifikasiya',
            'send_automatic_email' => 'E-poçtla göndər',
            'status' => 'Status',
            'sign_url' => 'İmza linki',
            'times_viewed' => 'Baxışlar',
            'last_view_at' => 'Son baxış',
            'signed_at' => 'İmzalanma tarixi',
        ],
        'status' => [
            'new' => 'Yeni',
            'link-opened' => 'Link açılıb',
            'signed' => 'İmzalanıb',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Ekranda imza',
        'tokenEmail' => 'E-poçt kodu',
        'assinaturaTela-tokenEmail' => 'Ekranda imza + e-poçt kodu',
        'tokenSms' => 'SMS kodu',
        'assinaturaTela-tokenSms' => 'Ekranda imza + SMS kodu',
        'tokenWhatsapp' => 'WhatsApp kodu',
        'assinaturaTela-tokenWhatsapp' => 'Ekranda imza + WhatsApp kodu',
        'certificadoDigital' => 'Rəqəmsal sertifikat',
    ],

    'cancel' => [
        'reason' => 'Səbəb',
        'notify_signers' => 'İmzalayanlara e-poçtla bildir',
    ],

    'webhook_call' => [
        'label' => 'Webhook çağırışı',
        'plural_label' => 'Webhook çağırışları',
        'fields' => [
            'event_type' => 'Hadisə',
            'document_token' => 'Sənəd',
            'processed' => 'Emal edilib',
            'exception' => 'Xəta',
            'created_at' => 'Alınma tarixi',
        ],
        'filters' => [
            'failed' => 'Xətalı',
        ],
    ],

    'actions' => [
        'send' => 'Sənəd göndər',
        'sync' => 'Sinxronlaşdır',
        'download' => 'İmzalı PDF',
        'cancel' => 'Ləğv et',
        'add_signer' => 'İmzalayan əlavə et',
        'remove_signer' => 'Sil',
        'reprocess' => 'Yenidən emal et',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Sənəd növbədədir: ZapSign onu qəbul edən kimi burada görünəcək.',
        'synced' => 'Sinxronlaşdırma növbəyə alındı.',
        'cancel_requested' => 'Ləğv tələb olundu: ZapSign təsdiqlədikdə status yenilənəcək.',
        'signer_added' => 'İmzalayan əlavə edildi.',
        'signer_removed' => 'İmzalayan silindi.',
        'reprocessed' => 'Webhook emal üçün növbəyə alındı.',
        'failed' => 'ZapSign xəta qaytardı',
    ],
];

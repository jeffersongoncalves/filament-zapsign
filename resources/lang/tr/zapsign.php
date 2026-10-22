<?php

return [
    'document' => [
        'label' => 'Belge',
        'plural_label' => 'Belgeler',
        'fields' => [
            'name' => 'Ad',
            'status' => 'Durum',
            'signers' => 'İmzacılar',
            'sandbox' => 'Sandbox',
            'token' => 'ZapSign belirteci',
            'external_id' => 'Harici kimlik',
            'documentable' => 'Bağlı olduğu kayıt',
            'created_at' => 'Oluşturulma',
            'finished_at' => 'Tamamlanma',
            'file' => 'Dosya (PDF veya DOCX)',
            'lang' => 'Dil',
            'date_limit_to_sign' => 'Son imza tarihi',
            'signature_order_active' => 'Yukarıdaki sırayla imzala',
            'rejected_reason' => 'Ret nedeni',
        ],
        'status' => [
            'pending' => 'Bekliyor',
            'signed' => 'İmzalandı',
            'refused' => 'Reddedildi',
        ],
    ],

    'signer' => [
        'label' => 'İmzacı',
        'plural_label' => 'İmzacılar',
        'fields' => [
            'name' => 'Ad',
            'email' => 'E-posta',
            'phone' => 'Telefon',
            'phone_country' => 'Ülke kodu',
            'phone_number' => 'Telefon numarası',
            'auth_mode' => 'Kimlik doğrulama',
            'send_automatic_email' => 'E-postayla gönder',
            'status' => 'Durum',
            'sign_url' => 'İmza bağlantısı',
            'times_viewed' => 'Görüntülenme',
            'last_view_at' => 'Son görüntülenme',
            'signed_at' => 'İmzalanma',
        ],
        'status' => [
            'new' => 'Yeni',
            'link-opened' => 'Bağlantı açıldı',
            'signed' => 'İmzalandı',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Ekranda imza',
        'tokenEmail' => 'E-posta kodu',
        'assinaturaTela-tokenEmail' => 'Ekranda imza + e-posta kodu',
        'tokenSms' => 'SMS kodu',
        'assinaturaTela-tokenSms' => 'Ekranda imza + SMS kodu',
        'tokenWhatsapp' => 'WhatsApp kodu',
        'assinaturaTela-tokenWhatsapp' => 'Ekranda imza + WhatsApp kodu',
        'certificadoDigital' => 'Dijital sertifika',
    ],

    'cancel' => [
        'reason' => 'Neden',
        'notify_signers' => 'İmzacıları e-postayla bilgilendir',
    ],

    'webhook_call' => [
        'label' => 'Webhook çağrısı',
        'plural_label' => 'Webhook çağrıları',
        'fields' => [
            'event_type' => 'Olay',
            'document_token' => 'Belge',
            'processed' => 'İşlendi',
            'exception' => 'Hata',
            'created_at' => 'Alınma',
        ],
        'filters' => [
            'failed' => 'Hatalı',
        ],
    ],

    'actions' => [
        'send' => 'Belge gönder',
        'sync' => 'Eşitle',
        'download' => 'İmzalı PDF',
        'cancel' => 'İptal et',
        'add_signer' => 'İmzacı ekle',
        'remove_signer' => 'Kaldır',
        'reprocess' => 'Yeniden işle',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Belge kuyrukta: ZapSign aldığında burada görünecek.',
        'synced' => 'Eşitleme kuyruğa alındı.',
        'cancel_requested' => 'İptal istendi: ZapSign onayladığında durum güncellenecek.',
        'signer_added' => 'İmzacı eklendi.',
        'signer_removed' => 'İmzacı kaldırıldı.',
        'reprocessed' => 'Webhook işlenmek üzere kuyruğa alındı.',
        'failed' => 'ZapSign bir hata döndürdü',
    ],
];

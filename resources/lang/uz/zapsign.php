<?php

return [
    'document' => [
        'label' => 'Hujjat',
        'plural_label' => 'Hujjatlar',
        'fields' => [
            'name' => 'Nomi',
            'status' => 'Holat',
            'signers' => 'Imzolovchilar',
            'sandbox' => 'Sandbox',
            'token' => 'ZapSign tokeni',
            'external_id' => 'Tashqi ID',
            'documentable' => 'Bogʻlangan',
            'created_at' => 'Yaratilgan',
            'finished_at' => 'Yakunlangan',
            'file' => 'Fayl (PDF yoki DOCX)',
            'lang' => 'Til',
            'date_limit_to_sign' => 'Imzolash muddati',
            'signature_order_active' => 'Yuqoridagi tartibda imzolash',
            'rejected_reason' => 'Rad etish sababi',
        ],
        'status' => [
            'pending' => 'Kutilmoqda',
            'signed' => 'Imzolangan',
            'refused' => 'Rad etilgan',
        ],
    ],

    'signer' => [
        'label' => 'Imzolovchi',
        'plural_label' => 'Imzolovchilar',
        'fields' => [
            'name' => 'Ism',
            'email' => 'Elektron pochta',
            'phone' => 'Telefon',
            'phone_country' => 'Mamlakat kodi',
            'phone_number' => 'Telefon raqami',
            'auth_mode' => 'Autentifikatsiya',
            'send_automatic_email' => 'Elektron pochta orqali yuborish',
            'status' => 'Holat',
            'sign_url' => 'Imzo havolasi',
            'times_viewed' => 'Koʻrishlar',
            'last_view_at' => 'Oxirgi koʻrilgan',
            'signed_at' => 'Imzolangan',
        ],
        'status' => [
            'new' => 'Yangi',
            'link-opened' => 'Havola ochilgan',
            'signed' => 'Imzolangan',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Ekranda imzo',
        'tokenEmail' => 'Elektron pochta kodi',
        'assinaturaTela-tokenEmail' => 'Ekranda imzo + elektron pochta kodi',
        'tokenSms' => 'SMS kodi',
        'assinaturaTela-tokenSms' => 'Ekranda imzo + SMS kodi',
        'tokenWhatsapp' => 'WhatsApp kodi',
        'assinaturaTela-tokenWhatsapp' => 'Ekranda imzo + WhatsApp kodi',
        'certificadoDigital' => 'Raqamli sertifikat',
    ],

    'cancel' => [
        'reason' => 'Sabab',
        'notify_signers' => 'Imzolovchilarga elektron pochta orqali xabar berish',
    ],

    'webhook_call' => [
        'label' => 'Webhook chaqiruvi',
        'plural_label' => 'Webhook chaqiruvlari',
        'fields' => [
            'event_type' => 'Hodisa',
            'document_token' => 'Hujjat',
            'processed' => 'Qayta ishlangan',
            'exception' => 'Xato',
            'created_at' => 'Qabul qilingan',
        ],
        'filters' => [
            'failed' => 'Xatoli',
        ],
    ],

    'actions' => [
        'send' => 'Hujjat yuborish',
        'sync' => 'Sinxronlash',
        'download' => 'Imzolangan PDF',
        'cancel' => 'Bekor qilish',
        'add_signer' => 'Imzolovchi qoʻshish',
        'remove_signer' => 'Olib tashlash',
        'reprocess' => 'Qayta ishlash',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Hujjat navbatda: ZapSign uni qabul qilishi bilan shu yerda paydo boʻladi.',
        'synced' => 'Sinxronlash navbatga qoʻyildi.',
        'cancel_requested' => 'Bekor qilish soʻraldi: ZapSign tasdiqlagach holat yangilanadi.',
        'signer_added' => 'Imzolovchi qoʻshildi.',
        'signer_removed' => 'Imzolovchi olib tashlandi.',
        'reprocessed' => 'Webhook qayta ishlash uchun navbatga qoʻyildi.',
        'failed' => 'ZapSign xato qaytardi',
    ],
];

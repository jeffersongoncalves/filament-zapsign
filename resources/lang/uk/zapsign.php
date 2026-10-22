<?php

return [
    'document' => [
        'label' => 'Документ',
        'plural_label' => 'Документи',
        'fields' => [
            'name' => 'Назва',
            'status' => 'Статус',
            'signers' => 'Підписанти',
            'sandbox' => 'Пісочниця',
            'token' => 'Токен ZapSign',
            'external_id' => 'Зовнішній ID',
            'documentable' => 'Пов’язано з',
            'created_at' => 'Створено',
            'finished_at' => 'Завершено',
            'file' => 'Файл (PDF або DOCX)',
            'lang' => 'Мова',
            'date_limit_to_sign' => 'Підписати до',
            'signature_order_active' => 'Підписувати у зазначеному порядку',
            'rejected_reason' => 'Причина відмови',
        ],
        'status' => [
            'pending' => 'Очікує',
            'signed' => 'Підписано',
            'refused' => 'Відхилено',
        ],
    ],

    'signer' => [
        'label' => 'Підписант',
        'plural_label' => 'Підписанти',
        'fields' => [
            'name' => 'Ім’я',
            'email' => 'Ел. пошта',
            'phone' => 'Телефон',
            'phone_country' => 'Код країни',
            'phone_number' => 'Номер телефону',
            'auth_mode' => 'Автентифікація',
            'send_automatic_email' => 'Надіслати ел. поштою',
            'status' => 'Статус',
            'sign_url' => 'Посилання для підпису',
            'times_viewed' => 'Перегляди',
            'last_view_at' => 'Останній перегляд',
            'signed_at' => 'Підписано',
        ],
        'status' => [
            'new' => 'Новий',
            'link-opened' => 'Посилання відкрито',
            'signed' => 'Підписано',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Підпис на екрані',
        'tokenEmail' => 'Код ел. поштою',
        'assinaturaTela-tokenEmail' => 'Підпис на екрані + код ел. поштою',
        'tokenSms' => 'Код через SMS',
        'assinaturaTela-tokenSms' => 'Підпис на екрані + код через SMS',
        'tokenWhatsapp' => 'Код у WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Підпис на екрані + код у WhatsApp',
        'certificadoDigital' => 'Цифровий сертифікат',
    ],

    'cancel' => [
        'reason' => 'Причина',
        'notify_signers' => 'Повідомити підписантів ел. поштою',
    ],

    'webhook_call' => [
        'label' => 'Виклик вебхука',
        'plural_label' => 'Виклики вебхука',
        'fields' => [
            'event_type' => 'Подія',
            'document_token' => 'Документ',
            'processed' => 'Оброблено',
            'exception' => 'Помилка',
            'created_at' => 'Отримано',
        ],
        'filters' => [
            'failed' => 'З помилкою',
        ],
    ],

    'actions' => [
        'send' => 'Надіслати документ',
        'sync' => 'Синхронізувати',
        'download' => 'Підписаний PDF',
        'cancel' => 'Скасувати',
        'add_signer' => 'Додати підписанта',
        'remove_signer' => 'Видалити',
        'reprocess' => 'Обробити знову',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Документ у черзі: він з’явиться тут, щойно ZapSign його отримає.',
        'synced' => 'Синхронізацію додано в чергу.',
        'cancel_requested' => 'Скасування запитано: статус оновиться після підтвердження ZapSign.',
        'signer_added' => 'Підписанта додано.',
        'signer_removed' => 'Підписанта видалено.',
        'reprocessed' => 'Вебхук додано в чергу на обробку.',
        'failed' => 'ZapSign повернув помилку',
    ],
];

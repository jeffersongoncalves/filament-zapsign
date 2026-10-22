<?php

return [
    'document' => [
        'label' => 'Документ',
        'plural_label' => 'Документы',
        'fields' => [
            'name' => 'Название',
            'status' => 'Статус',
            'signers' => 'Подписанты',
            'sandbox' => 'Песочница',
            'token' => 'Токен ZapSign',
            'external_id' => 'Внешний ID',
            'documentable' => 'Связан с',
            'created_at' => 'Создан',
            'finished_at' => 'Завершён',
            'file' => 'Файл (PDF или DOCX)',
            'lang' => 'Язык',
            'date_limit_to_sign' => 'Подписать до',
            'signature_order_active' => 'Подписывать в указанном порядке',
            'rejected_reason' => 'Причина отказа',
        ],
        'status' => [
            'pending' => 'Ожидает',
            'signed' => 'Подписан',
            'refused' => 'Отклонён',
        ],
    ],

    'signer' => [
        'label' => 'Подписант',
        'plural_label' => 'Подписанты',
        'fields' => [
            'name' => 'Имя',
            'email' => 'Эл. почта',
            'phone' => 'Телефон',
            'phone_country' => 'Код страны',
            'phone_number' => 'Номер телефона',
            'auth_mode' => 'Аутентификация',
            'send_automatic_email' => 'Отправить по эл. почте',
            'status' => 'Статус',
            'sign_url' => 'Ссылка для подписи',
            'times_viewed' => 'Просмотры',
            'last_view_at' => 'Последний просмотр',
            'signed_at' => 'Подписано',
        ],
        'status' => [
            'new' => 'Новый',
            'link-opened' => 'Ссылка открыта',
            'signed' => 'Подписан',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Подпись на экране',
        'tokenEmail' => 'Код по эл. почте',
        'assinaturaTela-tokenEmail' => 'Подпись на экране + код по эл. почте',
        'tokenSms' => 'Код по SMS',
        'assinaturaTela-tokenSms' => 'Подпись на экране + код по SMS',
        'tokenWhatsapp' => 'Код в WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Подпись на экране + код в WhatsApp',
        'certificadoDigital' => 'Цифровой сертификат',
    ],

    'cancel' => [
        'reason' => 'Причина',
        'notify_signers' => 'Уведомить подписантов по эл. почте',
    ],

    'webhook_call' => [
        'label' => 'Вызов вебхука',
        'plural_label' => 'Вызовы вебхука',
        'fields' => [
            'event_type' => 'Событие',
            'document_token' => 'Документ',
            'processed' => 'Обработан',
            'exception' => 'Ошибка',
            'created_at' => 'Получен',
        ],
        'filters' => [
            'failed' => 'С ошибкой',
        ],
    ],

    'actions' => [
        'send' => 'Отправить документ',
        'sync' => 'Синхронизировать',
        'download' => 'Подписанный PDF',
        'cancel' => 'Отменить',
        'add_signer' => 'Добавить подписанта',
        'remove_signer' => 'Удалить',
        'reprocess' => 'Обработать снова',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Документ в очереди: он появится здесь, когда ZapSign его получит.',
        'synced' => 'Синхронизация в очереди.',
        'cancel_requested' => 'Отмена запрошена: статус обновится после подтверждения ZapSign.',
        'signer_added' => 'Подписант добавлен.',
        'signer_removed' => 'Подписант удалён.',
        'reprocessed' => 'Вебхук поставлен в очередь на обработку.',
        'failed' => 'ZapSign вернул ошибку',
    ],
];

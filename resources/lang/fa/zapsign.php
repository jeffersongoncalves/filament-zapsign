<?php

return [
    'document' => [
        'label' => 'سند',
        'plural_label' => 'اسناد',
        'fields' => [
            'name' => 'نام',
            'status' => 'وضعیت',
            'signers' => 'امضاکنندگان',
            'sandbox' => 'محیط آزمایشی',
            'token' => 'توکن ZapSign',
            'external_id' => 'شناسه خارجی',
            'documentable' => 'مرتبط با',
            'created_at' => 'تاریخ ایجاد',
            'finished_at' => 'تاریخ تکمیل',
            'file' => 'فایل (PDF یا DOCX)',
            'lang' => 'زبان',
            'date_limit_to_sign' => 'مهلت امضا',
            'signature_order_active' => 'امضا به ترتیب بالا',
            'rejected_reason' => 'دلیل رد',
        ],
        'status' => [
            'pending' => 'در انتظار',
            'signed' => 'امضا شده',
            'refused' => 'رد شده',
        ],
    ],

    'signer' => [
        'label' => 'امضاکننده',
        'plural_label' => 'امضاکنندگان',
        'fields' => [
            'name' => 'نام',
            'email' => 'ایمیل',
            'phone' => 'تلفن',
            'phone_country' => 'کد کشور',
            'phone_number' => 'شماره تلفن',
            'auth_mode' => 'احراز هویت',
            'send_automatic_email' => 'ارسال با ایمیل',
            'status' => 'وضعیت',
            'sign_url' => 'پیوند امضا',
            'times_viewed' => 'بازدیدها',
            'last_view_at' => 'آخرین بازدید',
            'signed_at' => 'تاریخ امضا',
        ],
        'status' => [
            'new' => 'جدید',
            'link-opened' => 'پیوند باز شده',
            'signed' => 'امضا شده',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'امضا روی صفحه',
        'tokenEmail' => 'کد از طریق ایمیل',
        'assinaturaTela-tokenEmail' => 'امضا روی صفحه + کد از طریق ایمیل',
        'tokenSms' => 'کد از طریق پیامک',
        'assinaturaTela-tokenSms' => 'امضا روی صفحه + کد از طریق پیامک',
        'tokenWhatsapp' => 'کد از طریق واتس‌اپ',
        'assinaturaTela-tokenWhatsapp' => 'امضا روی صفحه + کد از طریق واتس‌اپ',
        'certificadoDigital' => 'گواهی دیجیتال',
    ],

    'cancel' => [
        'reason' => 'دلیل',
        'notify_signers' => 'اطلاع به امضاکنندگان با ایمیل',
    ],

    'webhook_call' => [
        'label' => 'فراخوانی وب‌هوک',
        'plural_label' => 'فراخوانی‌های وب‌هوک',
        'fields' => [
            'event_type' => 'رویداد',
            'document_token' => 'سند',
            'processed' => 'پردازش شده',
            'exception' => 'خطا',
            'created_at' => 'تاریخ دریافت',
        ],
        'filters' => [
            'failed' => 'ناموفق',
        ],
    ],

    'actions' => [
        'send' => 'ارسال سند',
        'sync' => 'همگام‌سازی',
        'download' => 'PDF امضا شده',
        'cancel' => 'لغو',
        'add_signer' => 'افزودن امضاکننده',
        'remove_signer' => 'حذف',
        'reprocess' => 'پردازش مجدد',
        'payload' => 'محتوا',
    ],

    'notifications' => [
        'queued' => 'سند در صف است: به محض دریافت توسط ZapSign اینجا نمایش داده می‌شود.',
        'synced' => 'همگام‌سازی در صف قرار گرفت.',
        'cancel_requested' => 'لغو درخواست شد: وضعیت پس از تأیید ZapSign به‌روز می‌شود.',
        'signer_added' => 'امضاکننده افزوده شد.',
        'signer_removed' => 'امضاکننده حذف شد.',
        'reprocessed' => 'وب‌هوک برای پردازش در صف قرار گرفت.',
        'failed' => 'ZapSign خطا برگرداند',
    ],
];

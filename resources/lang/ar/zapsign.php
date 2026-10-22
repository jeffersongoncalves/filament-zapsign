<?php

return [
    'document' => [
        'label' => 'مستند',
        'plural_label' => 'المستندات',
        'fields' => [
            'name' => 'الاسم',
            'status' => 'الحالة',
            'signers' => 'الموقّعون',
            'sandbox' => 'بيئة الاختبار',
            'token' => 'رمز ZapSign',
            'external_id' => 'المعرّف الخارجي',
            'documentable' => 'مرتبط بـ',
            'created_at' => 'تاريخ الإنشاء',
            'finished_at' => 'تاريخ الاكتمال',
            'file' => 'الملف (PDF أو DOCX)',
            'lang' => 'اللغة',
            'date_limit_to_sign' => 'آخر موعد للتوقيع',
            'signature_order_active' => 'التوقيع بالترتيب أعلاه',
            'rejected_reason' => 'سبب الرفض',
        ],
        'status' => [
            'pending' => 'قيد الانتظار',
            'signed' => 'موقّع',
            'refused' => 'مرفوض',
        ],
    ],

    'signer' => [
        'label' => 'موقّع',
        'plural_label' => 'الموقّعون',
        'fields' => [
            'name' => 'الاسم',
            'email' => 'البريد الإلكتروني',
            'phone' => 'الهاتف',
            'phone_country' => 'رمز الدولة',
            'phone_number' => 'رقم الهاتف',
            'auth_mode' => 'المصادقة',
            'send_automatic_email' => 'الإرسال بالبريد الإلكتروني',
            'status' => 'الحالة',
            'sign_url' => 'رابط التوقيع',
            'times_viewed' => 'المشاهدات',
            'last_view_at' => 'آخر مشاهدة',
            'signed_at' => 'تاريخ التوقيع',
        ],
        'status' => [
            'new' => 'جديد',
            'link-opened' => 'تم فتح الرابط',
            'signed' => 'موقّع',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'التوقيع على الشاشة',
        'tokenEmail' => 'رمز عبر البريد الإلكتروني',
        'assinaturaTela-tokenEmail' => 'التوقيع على الشاشة + رمز عبر البريد الإلكتروني',
        'tokenSms' => 'رمز عبر SMS',
        'assinaturaTela-tokenSms' => 'التوقيع على الشاشة + رمز عبر SMS',
        'tokenWhatsapp' => 'رمز عبر واتساب',
        'assinaturaTela-tokenWhatsapp' => 'التوقيع على الشاشة + رمز عبر واتساب',
        'certificadoDigital' => 'شهادة رقمية',
    ],

    'cancel' => [
        'reason' => 'السبب',
        'notify_signers' => 'إخطار الموقّعين بالبريد الإلكتروني',
    ],

    'webhook_call' => [
        'label' => 'استدعاء webhook',
        'plural_label' => 'استدعاءات webhook',
        'fields' => [
            'event_type' => 'الحدث',
            'document_token' => 'المستند',
            'processed' => 'تمت المعالجة',
            'exception' => 'الخطأ',
            'created_at' => 'تاريخ الاستلام',
        ],
        'filters' => [
            'failed' => 'فاشلة',
        ],
    ],

    'actions' => [
        'send' => 'إرسال المستند',
        'sync' => 'مزامنة',
        'download' => 'PDF الموقّع',
        'cancel' => 'إلغاء',
        'add_signer' => 'إضافة موقّع',
        'remove_signer' => 'إزالة',
        'reprocess' => 'إعادة المعالجة',
        'payload' => 'الحمولة',
    ],

    'notifications' => [
        'queued' => 'المستند في قائمة الانتظار: سيظهر هنا بمجرد استلام ZapSign له.',
        'synced' => 'تمت جدولة المزامنة.',
        'cancel_requested' => 'تم طلب الإلغاء: ستُحدَّث الحالة عند تأكيد ZapSign.',
        'signer_added' => 'تمت إضافة الموقّع.',
        'signer_removed' => 'تمت إزالة الموقّع.',
        'reprocessed' => 'تمت جدولة الـ webhook للمعالجة.',
        'failed' => 'أعادت ZapSign خطأً',
    ],
];

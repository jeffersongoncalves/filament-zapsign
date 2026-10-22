<?php

return [
    'document' => [
        'label' => 'दस्तावेज़',
        'plural_label' => 'दस्तावेज़',
        'fields' => [
            'name' => 'नाम',
            'status' => 'स्थिति',
            'signers' => 'हस्ताक्षरकर्ता',
            'sandbox' => 'सैंडबॉक्स',
            'token' => 'ZapSign टोकन',
            'external_id' => 'बाहरी ID',
            'documentable' => 'से जुड़ा',
            'created_at' => 'बनाया गया',
            'finished_at' => 'पूरा हुआ',
            'file' => 'फ़ाइल (PDF या DOCX)',
            'lang' => 'भाषा',
            'date_limit_to_sign' => 'हस्ताक्षर की अंतिम तिथि',
            'signature_order_active' => 'ऊपर दिए क्रम में हस्ताक्षर करें',
            'rejected_reason' => 'अस्वीकृति का कारण',
        ],
        'status' => [
            'pending' => 'लंबित',
            'signed' => 'हस्ताक्षरित',
            'refused' => 'अस्वीकृत',
        ],
    ],

    'signer' => [
        'label' => 'हस्ताक्षरकर्ता',
        'plural_label' => 'हस्ताक्षरकर्ता',
        'fields' => [
            'name' => 'नाम',
            'email' => 'ईमेल',
            'phone' => 'फ़ोन',
            'phone_country' => 'देश कोड',
            'phone_number' => 'फ़ोन नंबर',
            'auth_mode' => 'प्रमाणीकरण',
            'send_automatic_email' => 'ईमेल से भेजें',
            'status' => 'स्थिति',
            'sign_url' => 'हस्ताक्षर लिंक',
            'times_viewed' => 'देखे जाने की संख्या',
            'last_view_at' => 'अंतिम बार देखा गया',
            'signed_at' => 'हस्ताक्षर किया गया',
        ],
        'status' => [
            'new' => 'नया',
            'link-opened' => 'लिंक खोला गया',
            'signed' => 'हस्ताक्षरित',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'स्क्रीन पर हस्ताक्षर',
        'tokenEmail' => 'ईमेल कोड',
        'assinaturaTela-tokenEmail' => 'स्क्रीन पर हस्ताक्षर + ईमेल कोड',
        'tokenSms' => 'SMS कोड',
        'assinaturaTela-tokenSms' => 'स्क्रीन पर हस्ताक्षर + SMS कोड',
        'tokenWhatsapp' => 'WhatsApp कोड',
        'assinaturaTela-tokenWhatsapp' => 'स्क्रीन पर हस्ताक्षर + WhatsApp कोड',
        'certificadoDigital' => 'डिजिटल प्रमाणपत्र',
    ],

    'cancel' => [
        'reason' => 'कारण',
        'notify_signers' => 'हस्ताक्षरकर्ताओं को ईमेल से सूचित करें',
    ],

    'webhook_call' => [
        'label' => 'वेबहुक कॉल',
        'plural_label' => 'वेबहुक कॉल',
        'fields' => [
            'event_type' => 'इवेंट',
            'document_token' => 'दस्तावेज़',
            'processed' => 'प्रोसेस किया गया',
            'exception' => 'त्रुटि',
            'created_at' => 'प्राप्त हुआ',
        ],
        'filters' => [
            'failed' => 'विफल',
        ],
    ],

    'actions' => [
        'send' => 'दस्तावेज़ भेजें',
        'sync' => 'सिंक करें',
        'download' => 'हस्ताक्षरित PDF',
        'cancel' => 'रद्द करें',
        'add_signer' => 'हस्ताक्षरकर्ता जोड़ें',
        'remove_signer' => 'हटाएँ',
        'reprocess' => 'फिर से प्रोसेस करें',
        'payload' => 'पेलोड',
    ],

    'notifications' => [
        'queued' => 'दस्तावेज़ कतार में है: ZapSign को मिलते ही यह यहाँ दिखेगा।',
        'synced' => 'सिंक कतार में जोड़ा गया।',
        'cancel_requested' => 'रद्द करने का अनुरोध किया गया: ZapSign की पुष्टि के बाद स्थिति अपडेट होगी।',
        'signer_added' => 'हस्ताक्षरकर्ता जोड़ा गया।',
        'signer_removed' => 'हस्ताक्षरकर्ता हटाया गया।',
        'reprocessed' => 'वेबहुक प्रोसेसिंग के लिए कतार में जोड़ा गया।',
        'failed' => 'ZapSign ने एक त्रुटि लौटाई',
    ],
];

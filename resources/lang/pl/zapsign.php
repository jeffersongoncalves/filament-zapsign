<?php

return [
    'document' => [
        'label' => 'Dokument',
        'plural_label' => 'Dokumenty',
        'fields' => [
            'name' => 'Nazwa',
            'status' => 'Status',
            'signers' => 'Sygnatariusze',
            'sandbox' => 'Sandbox',
            'token' => 'Token ZapSign',
            'external_id' => 'Zewnętrzny ID',
            'documentable' => 'Powiązany z',
            'created_at' => 'Utworzono',
            'finished_at' => 'Zakończono',
            'file' => 'Plik (PDF lub DOCX)',
            'lang' => 'Język',
            'date_limit_to_sign' => 'Termin podpisania',
            'signature_order_active' => 'Podpisywanie w powyższej kolejności',
            'rejected_reason' => 'Powód odrzucenia',
        ],
        'status' => [
            'pending' => 'Oczekujący',
            'signed' => 'Podpisany',
            'refused' => 'Odrzucony',
        ],
    ],

    'signer' => [
        'label' => 'Sygnatariusz',
        'plural_label' => 'Sygnatariusze',
        'fields' => [
            'name' => 'Imię i nazwisko',
            'email' => 'E-mail',
            'phone' => 'Telefon',
            'phone_country' => 'Kod kraju',
            'phone_number' => 'Numer telefonu',
            'auth_mode' => 'Uwierzytelnianie',
            'send_automatic_email' => 'Wyślij e-mailem',
            'status' => 'Status',
            'sign_url' => 'Link do podpisu',
            'times_viewed' => 'Wyświetlenia',
            'last_view_at' => 'Ostatnio wyświetlono',
            'signed_at' => 'Podpisano',
        ],
        'status' => [
            'new' => 'Nowy',
            'link-opened' => 'Link otwarty',
            'signed' => 'Podpisany',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Podpis na ekranie',
        'tokenEmail' => 'Kod e-mailem',
        'assinaturaTela-tokenEmail' => 'Podpis na ekranie + kod e-mailem',
        'tokenSms' => 'Kod SMS',
        'assinaturaTela-tokenSms' => 'Podpis na ekranie + kod SMS',
        'tokenWhatsapp' => 'Kod przez WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Podpis na ekranie + kod przez WhatsApp',
        'certificadoDigital' => 'Certyfikat cyfrowy',
    ],

    'cancel' => [
        'reason' => 'Powód',
        'notify_signers' => 'Powiadom sygnatariuszy e-mailem',
    ],

    'webhook_call' => [
        'label' => 'Wywołanie webhooka',
        'plural_label' => 'Wywołania webhooka',
        'fields' => [
            'event_type' => 'Zdarzenie',
            'document_token' => 'Dokument',
            'processed' => 'Przetworzono',
            'exception' => 'Błąd',
            'created_at' => 'Odebrano',
        ],
        'filters' => [
            'failed' => 'Z błędem',
        ],
    ],

    'actions' => [
        'send' => 'Wyślij dokument',
        'sync' => 'Synchronizuj',
        'download' => 'Podpisany PDF',
        'cancel' => 'Anuluj',
        'add_signer' => 'Dodaj sygnatariusza',
        'remove_signer' => 'Usuń',
        'reprocess' => 'Przetwórz ponownie',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Dokument w kolejce: pojawi się tutaj, gdy ZapSign go otrzyma.',
        'synced' => 'Synchronizacja w kolejce.',
        'cancel_requested' => 'Zlecono anulowanie: status zaktualizuje się po potwierdzeniu przez ZapSign.',
        'signer_added' => 'Dodano sygnatariusza.',
        'signer_removed' => 'Usunięto sygnatariusza.',
        'reprocessed' => 'Webhook dodany do kolejki przetwarzania.',
        'failed' => 'ZapSign zwrócił błąd',
    ],
];

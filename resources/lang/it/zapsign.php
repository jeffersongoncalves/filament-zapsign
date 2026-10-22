<?php

return [
    'document' => [
        'label' => 'Documento',
        'plural_label' => 'Documenti',
        'fields' => [
            'name' => 'Nome',
            'status' => 'Stato',
            'signers' => 'Firmatari',
            'sandbox' => 'Sandbox',
            'token' => 'Token ZapSign',
            'external_id' => 'ID esterno',
            'documentable' => 'Collegato a',
            'created_at' => 'Creato il',
            'finished_at' => 'Completato il',
            'file' => 'File (PDF o DOCX)',
            'lang' => 'Lingua',
            'date_limit_to_sign' => 'Firmare entro',
            'signature_order_active' => 'Firmare nell’ordine indicato sopra',
            'rejected_reason' => 'Motivo del rifiuto',
        ],
        'status' => [
            'pending' => 'In attesa',
            'signed' => 'Firmato',
            'refused' => 'Rifiutato',
        ],
    ],

    'signer' => [
        'label' => 'Firmatario',
        'plural_label' => 'Firmatari',
        'fields' => [
            'name' => 'Nome',
            'email' => 'Email',
            'phone' => 'Telefono',
            'phone_country' => 'Prefisso internazionale',
            'phone_number' => 'Numero di telefono',
            'auth_mode' => 'Autenticazione',
            'send_automatic_email' => 'Invia via email',
            'status' => 'Stato',
            'sign_url' => 'Link di firma',
            'times_viewed' => 'Visualizzazioni',
            'last_view_at' => 'Ultima visualizzazione',
            'signed_at' => 'Firmato il',
        ],
        'status' => [
            'new' => 'Nuovo',
            'link-opened' => 'Link aperto',
            'signed' => 'Firmato',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Firma sullo schermo',
        'tokenEmail' => 'Codice via email',
        'assinaturaTela-tokenEmail' => 'Firma sullo schermo + codice via email',
        'tokenSms' => 'Codice via SMS',
        'assinaturaTela-tokenSms' => 'Firma sullo schermo + codice via SMS',
        'tokenWhatsapp' => 'Codice via WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Firma sullo schermo + codice via WhatsApp',
        'certificadoDigital' => 'Certificato digitale',
    ],

    'cancel' => [
        'reason' => 'Motivo',
        'notify_signers' => 'Avvisa i firmatari via email',
    ],

    'webhook_call' => [
        'label' => 'Chiamata webhook',
        'plural_label' => 'Chiamate webhook',
        'fields' => [
            'event_type' => 'Evento',
            'document_token' => 'Documento',
            'processed' => 'Elaborato',
            'exception' => 'Errore',
            'created_at' => 'Ricevuto il',
        ],
        'filters' => [
            'failed' => 'Con errore',
        ],
    ],

    'actions' => [
        'send' => 'Invia documento',
        'sync' => 'Sincronizza',
        'download' => 'PDF firmato',
        'cancel' => 'Annulla',
        'add_signer' => 'Aggiungi firmatario',
        'remove_signer' => 'Rimuovi',
        'reprocess' => 'Rielabora',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Documento in coda: comparirà qui appena ZapSign lo avrà ricevuto.',
        'synced' => 'Sincronizzazione in coda.',
        'cancel_requested' => 'Annullamento richiesto: lo stato si aggiorna quando ZapSign lo conferma.',
        'signer_added' => 'Firmatario aggiunto.',
        'signer_removed' => 'Firmatario rimosso.',
        'reprocessed' => 'Webhook in coda per l’elaborazione.',
        'failed' => 'ZapSign ha restituito un errore',
    ],
];

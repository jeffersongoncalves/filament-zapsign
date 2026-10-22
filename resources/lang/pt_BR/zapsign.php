<?php

return [
    'document' => [
        'label' => 'Documento',
        'plural_label' => 'Documentos',
        'fields' => [
            'name' => 'Nome',
            'status' => 'Status',
            'signers' => 'Signatários',
            'sandbox' => 'Sandbox',
            'token' => 'Token na ZapSign',
            'external_id' => 'ID externo',
            'documentable' => 'Vinculado a',
            'created_at' => 'Criado em',
            'finished_at' => 'Concluído em',
            'file' => 'Arquivo (PDF ou DOCX)',
            'lang' => 'Idioma',
            'date_limit_to_sign' => 'Prazo para assinar',
            'signature_order_active' => 'Assinar na ordem acima',
            'rejected_reason' => 'Motivo da recusa',
        ],
        'status' => [
            'pending' => 'Pendente',
            'signed' => 'Assinado',
            'refused' => 'Recusado',
        ],
    ],

    'signer' => [
        'label' => 'Signatário',
        'plural_label' => 'Signatários',
        'fields' => [
            'name' => 'Nome',
            'email' => 'E-mail',
            'phone' => 'Telefone',
            'phone_country' => 'DDI',
            'phone_number' => 'Telefone',
            'auth_mode' => 'Autenticação',
            'send_automatic_email' => 'Enviar por e-mail',
            'status' => 'Status',
            'sign_url' => 'Link de assinatura',
            'times_viewed' => 'Visualizações',
            'last_view_at' => 'Última visualização',
            'signed_at' => 'Assinado em',
        ],
        'status' => [
            'new' => 'Novo',
            'link-opened' => 'Abriu o link',
            'signed' => 'Assinado',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Assinatura na tela',
        'tokenEmail' => 'Código por e-mail',
        'assinaturaTela-tokenEmail' => 'Assinatura na tela + código por e-mail',
        'tokenSms' => 'Código por SMS',
        'assinaturaTela-tokenSms' => 'Assinatura na tela + código por SMS',
        'tokenWhatsapp' => 'Código por WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Assinatura na tela + código por WhatsApp',
        'certificadoDigital' => 'Certificado digital',
    ],

    'cancel' => [
        'reason' => 'Motivo',
        'notify_signers' => 'Avisar os signatários por e-mail',
    ],

    'webhook_call' => [
        'label' => 'Chamada de webhook',
        'plural_label' => 'Chamadas de webhook',
        'fields' => [
            'event_type' => 'Evento',
            'document_token' => 'Documento',
            'processed' => 'Processado',
            'exception' => 'Erro',
            'created_at' => 'Recebido em',
        ],
        'filters' => [
            'failed' => 'Com erro',
        ],
    ],

    'actions' => [
        'send' => 'Enviar documento',
        'sync' => 'Sincronizar',
        'download' => 'PDF assinado',
        'cancel' => 'Cancelar',
        'add_signer' => 'Adicionar signatário',
        'remove_signer' => 'Remover',
        'reprocess' => 'Reprocessar',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Documento na fila: ele aparece aqui assim que a ZapSign o receber.',
        'synced' => 'Sincronização na fila.',
        'cancel_requested' => 'Cancelamento solicitado: o status é atualizado quando a ZapSign confirmar.',
        'signer_added' => 'Signatário adicionado.',
        'signer_removed' => 'Signatário removido.',
        'reprocessed' => 'Webhook na fila para processamento.',
        'failed' => 'A ZapSign retornou um erro',
    ],
];

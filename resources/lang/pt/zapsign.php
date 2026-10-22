<?php

return [
    'document' => [
        'label' => 'Documento',
        'plural_label' => 'Documentos',
        'fields' => [
            'name' => 'Nome',
            'status' => 'Estado',
            'signers' => 'Signatários',
            'sandbox' => 'Sandbox',
            'token' => 'Token na ZapSign',
            'external_id' => 'ID externo',
            'documentable' => 'Associado a',
            'created_at' => 'Criado em',
            'finished_at' => 'Concluído em',
            'file' => 'Ficheiro (PDF ou DOCX)',
            'lang' => 'Idioma',
            'date_limit_to_sign' => 'Prazo para assinar',
            'signature_order_active' => 'Assinar pela ordem acima',
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
            'phone_country' => 'Indicativo',
            'phone_number' => 'Número de telefone',
            'auth_mode' => 'Autenticação',
            'send_automatic_email' => 'Enviar por e-mail',
            'status' => 'Estado',
            'sign_url' => 'Ligação de assinatura',
            'times_viewed' => 'Visualizações',
            'last_view_at' => 'Última visualização',
            'signed_at' => 'Assinado em',
        ],
        'status' => [
            'new' => 'Novo',
            'link-opened' => 'Abriu a ligação',
            'signed' => 'Assinado',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Assinatura no ecrã',
        'tokenEmail' => 'Código por e-mail',
        'assinaturaTela-tokenEmail' => 'Assinatura no ecrã + código por e-mail',
        'tokenSms' => 'Código por SMS',
        'assinaturaTela-tokenSms' => 'Assinatura no ecrã + código por SMS',
        'tokenWhatsapp' => 'Código por WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Assinatura no ecrã + código por WhatsApp',
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
        'queued' => 'Documento em fila: aparece aqui assim que a ZapSign o receber.',
        'synced' => 'Sincronização em fila.',
        'cancel_requested' => 'Cancelamento pedido: o estado é atualizado quando a ZapSign confirmar.',
        'signer_added' => 'Signatário adicionado.',
        'signer_removed' => 'Signatário removido.',
        'reprocessed' => 'Webhook em fila para processamento.',
        'failed' => 'A ZapSign devolveu um erro',
    ],
];

<?php

return [
    'document' => [
        'label' => 'Documento',
        'plural_label' => 'Documentos',
        'fields' => [
            'name' => 'Nombre',
            'status' => 'Estado',
            'signers' => 'Firmantes',
            'sandbox' => 'Sandbox',
            'token' => 'Token de ZapSign',
            'external_id' => 'ID externo',
            'documentable' => 'Vinculado a',
            'created_at' => 'Creado el',
            'finished_at' => 'Finalizado el',
            'file' => 'Archivo (PDF o DOCX)',
            'lang' => 'Idioma',
            'date_limit_to_sign' => 'Fecha límite para firmar',
            'signature_order_active' => 'Firmar en el orden de arriba',
            'rejected_reason' => 'Motivo del rechazo',
        ],
        'status' => [
            'pending' => 'Pendiente',
            'signed' => 'Firmado',
            'refused' => 'Rechazado',
        ],
    ],

    'signer' => [
        'label' => 'Firmante',
        'plural_label' => 'Firmantes',
        'fields' => [
            'name' => 'Nombre',
            'email' => 'Correo electrónico',
            'phone' => 'Teléfono',
            'phone_country' => 'Código de país',
            'phone_number' => 'Número de teléfono',
            'auth_mode' => 'Autenticación',
            'send_automatic_email' => 'Enviar por correo',
            'status' => 'Estado',
            'sign_url' => 'Enlace de firma',
            'times_viewed' => 'Visualizaciones',
            'last_view_at' => 'Última visualización',
            'signed_at' => 'Firmado el',
        ],
        'status' => [
            'new' => 'Nuevo',
            'link-opened' => 'Enlace abierto',
            'signed' => 'Firmado',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Firma en pantalla',
        'tokenEmail' => 'Código por correo',
        'assinaturaTela-tokenEmail' => 'Firma en pantalla + código por correo',
        'tokenSms' => 'Código por SMS',
        'assinaturaTela-tokenSms' => 'Firma en pantalla + código por SMS',
        'tokenWhatsapp' => 'Código por WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Firma en pantalla + código por WhatsApp',
        'certificadoDigital' => 'Certificado digital',
    ],

    'cancel' => [
        'reason' => 'Motivo',
        'notify_signers' => 'Avisar a los firmantes por correo',
    ],

    'webhook_call' => [
        'label' => 'Llamada de webhook',
        'plural_label' => 'Llamadas de webhook',
        'fields' => [
            'event_type' => 'Evento',
            'document_token' => 'Documento',
            'processed' => 'Procesado',
            'exception' => 'Error',
            'created_at' => 'Recibido el',
        ],
        'filters' => [
            'failed' => 'Con error',
        ],
    ],

    'actions' => [
        'send' => 'Enviar documento',
        'sync' => 'Sincronizar',
        'download' => 'PDF firmado',
        'cancel' => 'Cancelar',
        'add_signer' => 'Añadir firmante',
        'remove_signer' => 'Quitar',
        'reprocess' => 'Reprocesar',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Documento en cola: aparece aquí en cuanto ZapSign lo reciba.',
        'synced' => 'Sincronización en cola.',
        'cancel_requested' => 'Cancelación solicitada: el estado se actualiza cuando ZapSign la confirme.',
        'signer_added' => 'Firmante añadido.',
        'signer_removed' => 'Firmante quitado.',
        'reprocessed' => 'Webhook en cola para procesar.',
        'failed' => 'ZapSign devolvió un error',
    ],
];

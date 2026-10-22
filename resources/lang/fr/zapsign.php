<?php

return [
    'document' => [
        'label' => 'Document',
        'plural_label' => 'Documents',
        'fields' => [
            'name' => 'Nom',
            'status' => 'Statut',
            'signers' => 'Signataires',
            'sandbox' => 'Sandbox',
            'token' => 'Jeton ZapSign',
            'external_id' => 'ID externe',
            'documentable' => 'Lié à',
            'created_at' => 'Créé le',
            'finished_at' => 'Terminé le',
            'file' => 'Fichier (PDF ou DOCX)',
            'lang' => 'Langue',
            'date_limit_to_sign' => 'Signer avant le',
            'signature_order_active' => 'Signer dans l’ordre ci-dessus',
            'rejected_reason' => 'Motif du refus',
        ],
        'status' => [
            'pending' => 'En attente',
            'signed' => 'Signé',
            'refused' => 'Refusé',
        ],
    ],

    'signer' => [
        'label' => 'Signataire',
        'plural_label' => 'Signataires',
        'fields' => [
            'name' => 'Nom',
            'email' => 'E-mail',
            'phone' => 'Téléphone',
            'phone_country' => 'Indicatif pays',
            'phone_number' => 'Numéro de téléphone',
            'auth_mode' => 'Authentification',
            'send_automatic_email' => 'Envoyer par e-mail',
            'status' => 'Statut',
            'sign_url' => 'Lien de signature',
            'times_viewed' => 'Vues',
            'last_view_at' => 'Dernière consultation',
            'signed_at' => 'Signé le',
        ],
        'status' => [
            'new' => 'Nouveau',
            'link-opened' => 'Lien ouvert',
            'signed' => 'Signé',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => 'Signature à l’écran',
        'tokenEmail' => 'Code par e-mail',
        'assinaturaTela-tokenEmail' => 'Signature à l’écran + code par e-mail',
        'tokenSms' => 'Code par SMS',
        'assinaturaTela-tokenSms' => 'Signature à l’écran + code par SMS',
        'tokenWhatsapp' => 'Code par WhatsApp',
        'assinaturaTela-tokenWhatsapp' => 'Signature à l’écran + code par WhatsApp',
        'certificadoDigital' => 'Certificat numérique',
    ],

    'cancel' => [
        'reason' => 'Motif',
        'notify_signers' => 'Prévenir les signataires par e-mail',
    ],

    'webhook_call' => [
        'label' => 'Appel webhook',
        'plural_label' => 'Appels webhook',
        'fields' => [
            'event_type' => 'Événement',
            'document_token' => 'Document',
            'processed' => 'Traité',
            'exception' => 'Erreur',
            'created_at' => 'Reçu le',
        ],
        'filters' => [
            'failed' => 'En erreur',
        ],
    ],

    'actions' => [
        'send' => 'Envoyer le document',
        'sync' => 'Synchroniser',
        'download' => 'PDF signé',
        'cancel' => 'Annuler',
        'add_signer' => 'Ajouter un signataire',
        'remove_signer' => 'Retirer',
        'reprocess' => 'Retraiter',
        'payload' => 'Payload',
    ],

    'notifications' => [
        'queued' => 'Document en file d’attente : il apparaît ici dès que ZapSign l’a reçu.',
        'synced' => 'Synchronisation en file d’attente.',
        'cancel_requested' => 'Annulation demandée : le statut sera mis à jour dès que ZapSign la confirmera.',
        'signer_added' => 'Signataire ajouté.',
        'signer_removed' => 'Signataire retiré.',
        'reprocessed' => 'Webhook mis en file d’attente pour traitement.',
        'failed' => 'ZapSign a renvoyé une erreur',
    ],
];

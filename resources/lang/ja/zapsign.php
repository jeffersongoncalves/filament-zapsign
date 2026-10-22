<?php

return [
    'document' => [
        'label' => '文書',
        'plural_label' => '文書',
        'fields' => [
            'name' => '名前',
            'status' => 'ステータス',
            'signers' => '署名者',
            'sandbox' => 'サンドボックス',
            'token' => 'ZapSign トークン',
            'external_id' => '外部 ID',
            'documentable' => '関連先',
            'created_at' => '作成日時',
            'finished_at' => '完了日時',
            'file' => 'ファイル（PDF または DOCX）',
            'lang' => '言語',
            'date_limit_to_sign' => '署名期限',
            'signature_order_active' => '上記の順番で署名する',
            'rejected_reason' => '拒否理由',
        ],
        'status' => [
            'pending' => '保留中',
            'signed' => '署名済み',
            'refused' => '拒否',
        ],
    ],

    'signer' => [
        'label' => '署名者',
        'plural_label' => '署名者',
        'fields' => [
            'name' => '名前',
            'email' => 'メールアドレス',
            'phone' => '電話番号',
            'phone_country' => '国番号',
            'phone_number' => '電話番号',
            'auth_mode' => '認証方法',
            'send_automatic_email' => 'メールで送信',
            'status' => 'ステータス',
            'sign_url' => '署名リンク',
            'times_viewed' => '閲覧回数',
            'last_view_at' => '最終閲覧日時',
            'signed_at' => '署名日時',
        ],
        'status' => [
            'new' => '新規',
            'link-opened' => 'リンクを開いた',
            'signed' => '署名済み',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => '画面上で署名',
        'tokenEmail' => 'メールのコード',
        'assinaturaTela-tokenEmail' => '画面上で署名 + メールのコード',
        'tokenSms' => 'SMS のコード',
        'assinaturaTela-tokenSms' => '画面上で署名 + SMS のコード',
        'tokenWhatsapp' => 'WhatsApp のコード',
        'assinaturaTela-tokenWhatsapp' => '画面上で署名 + WhatsApp のコード',
        'certificadoDigital' => '電子証明書',
    ],

    'cancel' => [
        'reason' => '理由',
        'notify_signers' => '署名者にメールで通知する',
    ],

    'webhook_call' => [
        'label' => 'Webhook 呼び出し',
        'plural_label' => 'Webhook 呼び出し',
        'fields' => [
            'event_type' => 'イベント',
            'document_token' => '文書',
            'processed' => '処理済み',
            'exception' => 'エラー',
            'created_at' => '受信日時',
        ],
        'filters' => [
            'failed' => '失敗',
        ],
    ],

    'actions' => [
        'send' => '文書を送信',
        'sync' => '同期',
        'download' => '署名済み PDF',
        'cancel' => 'キャンセル',
        'add_signer' => '署名者を追加',
        'remove_signer' => '削除',
        'reprocess' => '再処理',
        'payload' => 'ペイロード',
    ],

    'notifications' => [
        'queued' => '文書をキューに追加しました。ZapSign が受信するとここに表示されます。',
        'synced' => '同期をキューに追加しました。',
        'cancel_requested' => 'キャンセルを依頼しました。ZapSign が確認するとステータスが更新されます。',
        'signer_added' => '署名者を追加しました。',
        'signer_removed' => '署名者を削除しました。',
        'reprocessed' => 'Webhook を処理キューに追加しました。',
        'failed' => 'ZapSign がエラーを返しました',
    ],
];

<?php

return [
    'document' => [
        'label' => '文档',
        'plural_label' => '文档',
        'fields' => [
            'name' => '名称',
            'status' => '状态',
            'signers' => '签署人',
            'sandbox' => '沙盒',
            'token' => 'ZapSign 令牌',
            'external_id' => '外部 ID',
            'documentable' => '关联到',
            'created_at' => '创建时间',
            'finished_at' => '完成时间',
            'file' => '文件（PDF 或 DOCX）',
            'lang' => '语言',
            'date_limit_to_sign' => '签署截止日期',
            'signature_order_active' => '按上方顺序签署',
            'rejected_reason' => '拒绝原因',
        ],
        'status' => [
            'pending' => '待处理',
            'signed' => '已签署',
            'refused' => '已拒绝',
        ],
    ],

    'signer' => [
        'label' => '签署人',
        'plural_label' => '签署人',
        'fields' => [
            'name' => '姓名',
            'email' => '电子邮件',
            'phone' => '电话',
            'phone_country' => '国家代码',
            'phone_number' => '电话号码',
            'auth_mode' => '身份验证',
            'send_automatic_email' => '通过电子邮件发送',
            'status' => '状态',
            'sign_url' => '签署链接',
            'times_viewed' => '查看次数',
            'last_view_at' => '最后查看时间',
            'signed_at' => '签署时间',
        ],
        'status' => [
            'new' => '新建',
            'link-opened' => '已打开链接',
            'signed' => '已签署',
        ],
    ],

    'auth_modes' => [
        'assinaturaTela' => '屏幕签名',
        'tokenEmail' => '电子邮件验证码',
        'assinaturaTela-tokenEmail' => '屏幕签名 + 电子邮件验证码',
        'tokenSms' => '短信验证码',
        'assinaturaTela-tokenSms' => '屏幕签名 + 短信验证码',
        'tokenWhatsapp' => 'WhatsApp 验证码',
        'assinaturaTela-tokenWhatsapp' => '屏幕签名 + WhatsApp 验证码',
        'certificadoDigital' => '数字证书',
    ],

    'cancel' => [
        'reason' => '原因',
        'notify_signers' => '通过电子邮件通知签署人',
    ],

    'webhook_call' => [
        'label' => 'Webhook 调用',
        'plural_label' => 'Webhook 调用',
        'fields' => [
            'event_type' => '事件',
            'document_token' => '文档',
            'processed' => '已处理',
            'exception' => '错误',
            'created_at' => '接收时间',
        ],
        'filters' => [
            'failed' => '失败',
        ],
    ],

    'actions' => [
        'send' => '发送文档',
        'sync' => '同步',
        'download' => '已签署 PDF',
        'cancel' => '取消',
        'add_signer' => '添加签署人',
        'remove_signer' => '移除',
        'reprocess' => '重新处理',
        'payload' => '负载',
    ],

    'notifications' => [
        'queued' => '文档已加入队列：ZapSign 接收后将显示在这里。',
        'synced' => '同步已加入队列。',
        'cancel_requested' => '已请求取消：ZapSign 确认后状态将更新。',
        'signer_added' => '已添加签署人。',
        'signer_removed' => '已移除签署人。',
        'reprocessed' => 'Webhook 已加入处理队列。',
        'failed' => 'ZapSign 返回了错误',
    ],
];

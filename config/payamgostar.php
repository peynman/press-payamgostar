<?php

return [
    'permissions' => [
        \Larapress\PayamGostar\CRUD\PayamGostarPermissions::class,
    ],

    // payam gostar end point
    'socket_timeout' => 60, // or else on slow networks you will get SoapFault Error Fetching http headers
    'base_url' => env('PAYAMGOSTAR_URL', null),
    'username' => env('PAYAMGOSTAR_USERNAME', null),
    'password' => env('PAYAMGOSTAR_PASSWORD', null),
    'use_local_wsdl' => true,
    'proxy' => [
        'enabled' => env('APP_ENV') == 'local',
        'local_wsdl_path' => resource_path('wsdl/payamgostar'), // download with soapurl or else you can not connect even with working proxy
        'host' => 'pg-proxy',
        'port' => 8080,
    ],
    'datetime_format' => "Y-m-d\\TH:i:s.Z",

    'sync' => [
        // used while registering customers
        'customer_identity_type' => 'حقیقی',
        'roles' => [
            'default' => [
                'ignore' => true,
            ],
            'student' => [
                'type_id' => 'xx-xx-xx-xx-xx',
                'type_index' => 24,
                'type_code' => 'M_01',
                'identity_type' => 'حقیقی',
                'category_ids' => [
                    'xx-xx-xx-xx-xx',
                ],
                'dont_contact' => false,
            ],
            'super-role' => [
                'type_id' => 'xx-xx-xx-xx-xx',
                'type_index' => 24,
                'type_code' => 'M_01',
                'identity_type' => 'حقیقی',
                'category_ids' => [
                    'xx-xx-xx-xx-xx',
                ],
                'dont_contact' => true,
            ],
            'support' => [
                'same' => 'super-role',
            ],
        ],
        // used while syncing products
        'root_product_group' => 'xx-xx-xx-xx-xx',
        // allow only this kind of product to be synced
        'allowed_product_types' => [1],
        // chunk size db reading when syncing
        'chunk_size' => 100,
        // product sync options
        'invoice_type' => 'Invoice',
        'invoice_type_code' => 'Inv1',
        'invoice_type_id' => 'xx-xx-xx-xx-xx',
        'invoice_type_index' => 5,
        // address type
        'address_type' => 'سایر',
        // phone type
        'phone_type' => 'موبایل',
    ],
];

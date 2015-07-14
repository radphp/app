<?php

return [
    'debug' => false,
    'languages' => [
        'possible' => ['en'],
        'default' => 'en'
    ],
    'cake_orm' => [
        'datasources' => [
            'default' => [
                'className' => 'Cake\Database\Connection',
                'driver' => 'Cake\Database\Driver\Postgres',
                'persistent' => false,
                'host' => 'localhost',
                'username' => 'radphp_user',
                'password' => 'rad123',
                'database' => 'radphp_db',
                'encoding' => 'utf8',
                'timezone' => 'UTC',
                'cacheMetadata' => true
            ]
        ]
    ],
    'bundles' => [
        'App' => [],
        'Twig' => [],
        'Pages' => [],
        'CakeOrm' => [],
    ]
];

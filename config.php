<?php return [

    'security' => [
        ['login' => 'password']
    ],
    'cache'    => [
        'time' => 60,
    ],
    'services' => [
        'database' => [
            'type' => 'redis',
            'path' => 'conectstring'
        ],
        'template' => [
            'type' => 'php',
            'path' => __DIR__ . '/tpl'
        ]
    ]
];

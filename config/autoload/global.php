<?php

return [
    'db' => [
        'driver' => 'Pdo_Mysql',
        'dsn' => 'mysql:host=192.168.62.130;port=3306;dbname=todoApp;charset=utf8',
        'driver_options' => [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ],
    ],
    'service-manager' => [
        'factories' => [
            'Laminas\Db\Adapter\Adapter' => 'Laminas\Db\Adapter\AdapterServiceFactory'
        ]
    ]
];

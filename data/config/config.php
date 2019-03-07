<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => ROOT_PATH.'templates/',
            'template_cache' => DATA_TWIG_CACHE_PATH.'/twig_cache'
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : APP_ACCESS_LOG_PATH . '/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'www_huahua_top',
            'username' => 'root',
            'password' => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => 'ysa_',
        ],
        'cashbin_db'=>[
            'type'     => 'mysql',
            'hostname' => '127.0.0.1',
            'database' => 'www_huahua_top',
            'username' => 'root',
            'password' => 'root',
            'hostport' => '3306',
        ]

    ],
];

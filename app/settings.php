<?php

return [

    'appname' => 'slimskeleton',

    'timezone' => 'Asia/Jakarta',

    'mode' => 'development',

    'db' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'dbname'    => 'testing',
        'user'      => 'root',
        'password'  => '',
        'charset'   => 'utf8',
    ],

    'view' => [
        'template_path' => __DIR__ . '/views',
        'twig' => [
            'cache' => __DIR__ . '/../cache/twig',
            'debug' => true,
            'auto_reload' => true,
        ],
    ],

    'logger' => [
        'name' => 'app',
        'path' => __DIR__ . '/../logs/app.log',
    ],

];
<?php

use App\Service\ServiceContainer;

$configuration = [
    'db' => [
        'dsn' => 'mysql:dbname=carsloc;host=localhost;charset=utf8',
        'username' => 'root',
        'password' => '',
    ],
    'env' => [
        'base_path' => 'http://localhost/CARS/loccars'
    ]

];

require_once __DIR__ . '/../vendor/autoload.php';
$container = new ServiceContainer($configuration);

require_once __DIR__ . '/routes.php';
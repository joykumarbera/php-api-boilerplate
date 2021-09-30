<?php

require_once __DIR__ . '/vendor/autoload.php';

use Buki\Router\Router;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once __DIR__ . '/db.php';

$router = new Router([
    'paths' => [
      'controllers' => 'app/Controllers',
      'middlewares' => 'app/Middlewares',
    ],
    'namespaces' => [
      'controllers' => 'App\Controllers',
      'middlewares' => 'App\Middlewares',
    ]
]);

// For basic GET URI by using a Controller class.
$router->get('/auth', 'AuthController@main', [ 'before' => Auth::class ]);

$router->run();

<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

$router = new \Buki\Router\Router([
    'paths' => [
      'controllers' => 'app/Controllers',
      'middlewares' => 'app/Middlewares',
    ],
    'namespaces' => [
      'controllers' => 'App\Controllers',
      'middlewares' => 'App\Middlewares',
	],
	// 'debug' => true
]);

require_once __DIR__ . '/routes.php';

$router->run();
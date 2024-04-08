<?php

use App\Http\Controllers\JiriController;
use \App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use \App\Http\Controllers\UnAuthenticatedSessionController;

/** @var Core\Router $router */
$router->get('/', [JiriController::class, 'index']);

$router->get('/jiris', [JiriController::class, 'index']);

$router->get('/jiri', [JiriController::class, 'show']);

$router->get('/jiri/create', [JiriController::class, 'create']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri', [JiriController::class, 'update'])->csrf();


$router->delete('/jiri', [JiriController::class, 'destroy'])->csrf();

$router->get('/login', [AuthenticatedSessionController::class, 'create']);
$router->post('/login', [AuthenticatedSessionController::class, 'store'])->csrf();

$router->get('/register', [RegisteredUserController::class, 'create']);
$router->post('/register', [RegisteredUserController::class, 'store'])->csrf();

$router->get('/logout', [UnAuthenticatedSessionController::class, 'create']);



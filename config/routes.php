<?php

use Core\Route;
use App\Controllers\Notas;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\RegisterController;
use App\Middlewares\GuestMiddleware;
use App\Middlewares\AuthMiddleware;

(new Route())

    // Não autenticado
    ->get('/', IndexController::class, GuestMiddleware::class)
    ->get('/login', [LoginController::class, 'login'], GuestMiddleware::class)
    ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)
    ->get('/registrar', [RegisterController::class, 'index'], GuestMiddleware::class)
    ->post('/registrar', [RegisterController::class, 'register'], GuestMiddleware::class)

    // Autenticado
    ->get('/logout', LogoutController::class, AuthMiddleware::class)
    ->get('/notas', Notas\IndexController::class, AuthMiddleware::class)
    ->get('/notas/criar', [Notas\CriarController::class, 'index'], AuthMiddleware::class)
    ->post('/notas/criar', [Notas\CriarController::class, 'store'], AuthMiddleware::class)



    ->run();

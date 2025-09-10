<?php

use Core\Route;
use App\Controllers\Notas;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Controllers\LogoutController;
use App\Controllers\RegisterController;

(new Route())
    ->get('/', IndexController::class)

    ->get('/login', [LoginController::class, 'login'])
    ->post('/login', [LoginController::class, 'login'])

    ->get('/dashboard', DashboardController::class)
    ->get('/notas/criar', [Notas\CriarController::class, 'index'])
    ->post('/notas/criar', [Notas\CriarController::class, 'store'])
    
    ->get('/logout', LogoutController::class)

    ->get('/registrar', [RegisterController::class, 'index'])
    ->post('/registrar', [RegisterController::class, 'register'])


    ->run();
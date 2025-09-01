<?php

$ROOT = dirname(__DIR__); 

// Models
require $ROOT . '/models/Usuario.php';

session_start();
// Core
require $ROOT . '/Flash.php';
require $ROOT . '/functions.php';
require $ROOT . '/database.php';
require $ROOT . '/Validacao.php';
require $ROOT . '/routes.php';
<?php
$ROOT = dirname(__DIR__);

require $ROOT . '/Core/functions.php';

spl_autoload_register(function ($class) use ($ROOT) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = $ROOT . '/' . $class . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

session_start();

require $ROOT . '/routes.php';

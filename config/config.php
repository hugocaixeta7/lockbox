<?php

return [
    'database' => [
        'driver' => 'mysql',
        'host'   => 'localhost',
        'port'   => 3306,
        'database' => 'lockbox',   // <── troquei aqui
        'username' => 'root',      // <── troquei aqui
        'password' => '',          // <── adiciona se precisar
        'charset' => 'utf8mb4',
    ],
    'security' => [
        'first_key'  => env('ENCRYPT_FIRST_KEY', base64_encode('jeremias')),
        'second_key' => env('ENCRYPT_SECOND_KEY', base64_encode('jeremias123')),
    ],
];

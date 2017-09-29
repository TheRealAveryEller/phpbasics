<?php
return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'php-learning',
        'user' => 'root',
        'password' => '',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'partials_path' => './views/partials/'
];
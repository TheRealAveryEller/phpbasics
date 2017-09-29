<?php
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'about/culture?name=' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);
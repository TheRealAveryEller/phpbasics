<?php

$query = require './core/bootstrap.php';

// require $app['config']['partials_path'].'head.view.php';
require Router::load('routes.php')
    ->direct(Request::uri());
// require $app['config']['partials_path'].'footer.view.php';

<?php

$query = require './core/bootstrap.php';

// require $app['config']['partials_path'].'head.view.php';
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
// require $app['config']['partials_path'].'footer.view.php';

<?php
$app['config'] = require 'config.php';

// Return a QueryBuilder
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
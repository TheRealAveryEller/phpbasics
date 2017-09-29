<?php
// Global Imports
require 'functions.php';
require './core/Task.php';
require './core/Router.php';
require './core/database/Connection.php';
require './core/database/QueryBuilder.php';
require './core/Request.php';
require './core/User.php';

$app['config'] = require 'config.php';

// Retunr a QueryBuilder
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
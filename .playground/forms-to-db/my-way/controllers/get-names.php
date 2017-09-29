<?php
$added = false;
$users = $app['database']->selectAll('users', 'User');
// var_dump($users);
require 'views/show-names.view.php';
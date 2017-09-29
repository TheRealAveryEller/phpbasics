<?php
$added = false;
$users = App::get('database')->selectAll('users', 'User');
// var_dump($users);
require 'views/show-names.view.php';
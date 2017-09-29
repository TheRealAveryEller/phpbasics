<?php
$user = new User();
$user->setFirstName($_POST['name']);
$added = $app['database']->insert('users', $user);
$users = $app['database']->selectAll('users', 'User');
// var_dump($users);
require 'views/show-names.view.php';
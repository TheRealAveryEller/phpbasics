<?php
$users = $app['database']->selectAll('users', 'User');
// View
require './views/index.view.php';
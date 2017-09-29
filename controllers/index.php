<?php
$users = App::get('database')->selectAll('users', 'User');
// View
require './views/index.view.php';
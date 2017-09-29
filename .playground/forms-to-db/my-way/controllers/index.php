<?php
$tasks = $app['database']->selectAll('todos', 'Task');
// View
require './views/index.view.php';
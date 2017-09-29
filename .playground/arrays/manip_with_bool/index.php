<?php

$task = [
    'title' => 'Finish Homework',
    'due' => 'Today',
    'assigned_to' => 'Me',
    'completed' => false
];

if(isset($_GET['completed']))
    $task['completed'] = (boolean)$_GET['completed'];

require 'index.view.php';
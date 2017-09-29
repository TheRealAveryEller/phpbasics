<?php
// Imports
require 'functions.php';
require 'task.model.php';

$tasks = createTasks();

// View
require 'index.view.php';

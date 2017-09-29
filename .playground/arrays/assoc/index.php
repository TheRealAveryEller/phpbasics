<?php

$person = [
    'age' => 28,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Avery';
unset($person['age']);

// echo $person['hair'];



// echo '<pre>';
die(var_dump($person));
// echo '</pre>';

require 'index.view.php';
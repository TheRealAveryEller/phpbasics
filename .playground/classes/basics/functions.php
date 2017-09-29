<?php

function dd($thing) {
    die(var_dump($thing));
}

function createTasks() {
    return $tasks = [
        new Task('Farts'),
        new Task('Tests'),
        new Task('Something')
    ];
}
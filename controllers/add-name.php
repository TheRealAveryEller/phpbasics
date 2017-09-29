<?php
App::get('database')->insert('users', [
    'first_name' => $_POST['first_name']
]);

header('Location: /');
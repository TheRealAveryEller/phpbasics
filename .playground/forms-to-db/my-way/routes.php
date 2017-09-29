<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->get('names', 'controllers/get-names.php');
$router->post('names', 'controllers/add-name.php');

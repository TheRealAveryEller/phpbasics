<?php
isset($_GET['name']) ? $name = $_GET['name'] : $name = 'Fartface';
require 'views/about-culture.view.php';
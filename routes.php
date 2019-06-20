<?php

$router->get('laracast/data21/index.php/home','controller/index.php');
$router->get('laracast/data21/index.php/about','controller/aboutus.php');
$router->get('laracast/data21/index.php/aboutculture','controller/about-culture.php');
$router->get('laracast/data21/index.php/contact','controller/contact.php');
$router->post('laracast/data21/index.php/names','controller/add-name.php');


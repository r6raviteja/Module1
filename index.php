<?php
$database=require 'core/bootstrap.php';
#$router=new Router;
#require 'routes.php';
$uri=trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');
$reqMet=$_SERVER['REQUEST_METHOD'];
#require $router->direct('about');

#die(var_dmp($app));

#die( $reqMet);
require Router::load('routes.php')->direct($uri , $reqMet);


#require 'Task.php';
?>
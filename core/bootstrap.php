<?php
$app=[];

$app['$config']=require 'config.php';

require 'core/router.php';

require 'core/connections.php';
require 'core/querybuilder.php';
$app['database']= new querybuilder(
connection::make($app['$config']['database'])
);
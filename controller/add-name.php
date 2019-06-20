<?php
//var_dump($_REQUEST['name']);

$app['database']->insert("users",["name"=>$_POST["name"]
]);

header("location:home");
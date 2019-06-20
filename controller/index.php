<?php

$users=$app['database']->selectall('users'); 
require 'view/strike.php';

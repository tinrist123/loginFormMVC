<?php

require_once './bootstraps/bootstraps.php';
session_start();


// A few problems with this line 
// $_SESSION['loginStatus'] = false;

$router = new bootstraps_router(__DIR__);

$router->Router();

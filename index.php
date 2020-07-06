<?php

require_once './bootstraps/bootstraps.php';
session_start();

// A few problems with this line 
if (!isset($_SESSION['loginstatus']))
    $_SESSION['loginstatus'] = false;
$router = new bootstraps_router(__DIR__);

$router->Router();

<?php

require_once './bootstraps/bootstraps.php';
session_start();


if (!isset($_SESSION['loginstatus']))
    $_SESSION['loginstatus'] = false;

if (isset($_GET['token'])) {
    if ($_GET['token'] == "1") {
        $router = new bootstraps_router();
        echo "<a href='{$router->createUrl('Controllers/Admin/AdminController')}'>Link to Admins</a>";
        die();
    }
}
$router = new bootstraps_router(__DIR__);

$router->Router();

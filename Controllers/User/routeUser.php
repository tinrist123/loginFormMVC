<?php
require_once './bootstraps/bootstraps.php';

if (isset($_GET['route'])) {
    $page = $_GET['route'];

    $router = new bootstraps_router();
    if (isset($_GET['attention'])) {
        $_SESSION['attention'] = true;
    }
    $router->$page();
}

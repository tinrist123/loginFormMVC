<?php

if (isset($_SESSION['errorLogedin'])) {
    unset($_SESSION['errorLogedin']);
}
if (isset($_SESSION['attention'])) {
    unset($_SESSION['attention']);
}
if (isset($_GET['controller'])) {
    $controllerName = ucfirst(strtolower($_GET['controller']));
    $ExecutingController = "Controllers_" . $controllerName . "Controller";
    if (isset($_GET['method'])) {
        $methodName = ucfirst(($_GET['method']));;
    }
}

$controller = new $ExecutingController();

$controller->$methodName();

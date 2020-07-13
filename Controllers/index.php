<?php

if (isset($_GET['controller'])) {
    $controllerName = ucfirst(strtolower($_GET['controller']));
    $ExecutingController = "Controllers_" . $controllerName . "Controller";
    if (isset($_GET['method'])) {
        $methodName = ucfirst(($_GET['method']));;
    }
}


$controller = new $ExecutingController();

$controller->$methodName();

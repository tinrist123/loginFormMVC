<?php
if (isset($_SESSION['lastEditAdmin'])) {
    unset($_SESSION['lastEditAdmin']);
}
if (isset($_SESSION['attention'])) {
    unset($_SESSION['attention']);
}
if (isset($_SESSION['error'])) {
    if (isset($_SESSION['error'])) {
        if ($_SESSION['error'] == "emptyField") {
            unset($_SESSION['error']);
        } else if ($_SESSION['error'] == "EmailInvalid") {
            unset($_SESSION['error']);
        }
    }
}
if (isset($_GET['controller'])) {
    if (isset($_GET['View'])) {
        $ExecutingController = 'Controllers_Admin_' . $_GET['controller'] . 'Controller';
        $methodName = 'View' . $_GET['View'];
        if (isset($_GET['category'])) {
            $cate = $_GET['category'];

            $controller = new $ExecutingController($cate);
        } else {
            $controller = new $ExecutingController();
        }
        $controller->$methodName();
    }
}

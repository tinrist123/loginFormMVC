<?php

spl_autoload_register(function ($className) {
    $exp = str_replace('_', '/', $className) . '.php';
    $path = str_replace('bootstraps', '', dirname(__FILE__));
    require_once $path . '/' . $exp;
});

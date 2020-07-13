<?php

spl_autoload_register(function ($className) {
    $path = str_replace('bootstraps', '', dirname(__FILE__));
    $exp = str_replace('_', '/', $className) . '.php';

    require_once $path . '/' . $exp;
});

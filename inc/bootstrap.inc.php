<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'On');    //Setzen in php.ini

spl_autoload_register(function ($class) {
    $filename = 'lib/' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($filename)) {
        include($filename);
    }
});

$mode = '0';
switch (mb_strtolower($mode)) {       //mb = multibyte
    case '1':
    case 'pdo':
        $class = 'PDO';
        break;
    case '0':
    case 'mock':
    default:
        $class = 'mock';
        break;
}
require_once (__DIR__ . '/../lib/Data/DataManager_' . $class . '.php');
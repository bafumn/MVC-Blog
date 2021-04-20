<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'app/components/Dev.php';
require_once 'app/components/Autoload.php';

define('ROOT', __DIR__);

$router = new App\Core\Router;
$router->dispatch();
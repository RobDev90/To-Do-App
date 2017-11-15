<?php

require 'vendor/autoload.php'; // Composer autoloader
require 'core/bootstrap.php';
$router = Router::load('routes.php');

try {
    require $router->direct(Request::uri(), Request::method());
} catch(Exception $e) {
    echo $e->getMessage();
}


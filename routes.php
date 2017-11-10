<?php

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->post('add-todo', 'controllers/add-todo.php');
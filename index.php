<?php

const BASE_PATH = __DIR__.'/./';

include BASE_PATH.'Core/functions.php';

include base_path('Core/Response.php');

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR , $class);
    include base_path("{$class}.php");
});

include base_path('bootstrap.php');

include base_path('Core/router.php');

$router = new \Core\Router();

$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri , $method);
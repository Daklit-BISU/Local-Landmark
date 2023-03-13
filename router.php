<?php 

include('./Response.php');
$routes = include('./routes.php');
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];

function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes)){
        include($routes[$uri]);
    }
    else{
        abort(Response::NOT_FOUND_ERR);
    }
}

function abort($code = 404){
    http_response_code($code);

    include("./views/${code}.view.php");
    
    die();
}

?>
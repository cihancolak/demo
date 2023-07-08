<?php

function routesToControllers($uri, $routes) {


    if(array_key_exists($uri, $routes)) {
        require  space_path($routes[$uri]);    } 
        
        else {
        abort();
    }
}
function abort($code = 404){

    http_response_code($code);
    require "views/{$code}.php";
   
    die();

}

$routes = require space_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


routesToControllers($uri,$routes);


?>
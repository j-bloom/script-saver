<?php

// Parse the uri so only the expected parameters are parsed and return
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require("routes.php");


// Check if the route has a matching uri requested in the lookup table
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        abort();
    }
}
// Helper function to display an error message and abort the request
function abort($code = 404)
{
    http_response_code($code);

    require("views/{$code}.php");

    die();
}

routeToController($uri, $routes);
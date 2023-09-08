<?php

function routesToController($uri, $routes)
{
    if(array_key_exists($uri, $routes))
    {
        require $routes[$uri];
    }
    else{
        abort("Invalid Url", 404);
    }
}

function abort($error, $statusCode = 404)
{
    http_response_code($statusCode);
    echo json_encode(
        [
            "error" => "$error",
            "status_code" => "$statusCode"
        ]
        );
        die();
}
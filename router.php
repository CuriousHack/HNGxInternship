<?php

require 'functions.php';
$routes = require 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routesToController($uri, $routes);

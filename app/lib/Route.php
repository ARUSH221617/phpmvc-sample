<?php

namespace Lordar221617\Portfolio;

class Route {
    static public array $routes = [];
    static public array $requests = [];

    static function add(string $route, array $action)
    {
        self::$routes[$route] = $action;
    }

    public function post(string $route, array $action)
    {
        self::$requests[$route] = $action;
    }
}
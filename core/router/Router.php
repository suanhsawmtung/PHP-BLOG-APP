<?php


class Router{
    protected static array $routes= [
        "GET" => [],
        "POST" => []
    ];

    public static function get(string $key, array $values): void
    {
        $router = new Router();
        static::$routes["GET"][$key] = $values;
    }

    public static function post(string $key, array $values): void
    {
        $router = new Router();
        static::$routes["POST"][$key] = $values;
    }

    public static function direct($route, $request){
        [$controller, $method] = static::$routes[$request][$route];
        $obj = new $controller();
        $obj->$method();
    }
}
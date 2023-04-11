<?php

namespace core\App;

class App {
    public static array $dependencies = [];

    public static function bind(string $key, mixed $value): void
    {
        self::$dependencies[$key] = $value;
    }

    public static function get(string $key): mixed 
    {
        return self::$dependencies[$key];
    }
}

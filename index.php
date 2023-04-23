<?php

declare(strict_types=1);

use core\App\App;

session_start();

require __DIR__ . '/vendor/autoload.php';


/**_____Dependencies Store_____ */
App::bind("config", require "config.php");
App::bind("pdo", Connection::make(App::get("config")["database"]));

Router::direct(parse_url(rtrim($_SERVER["REQUEST_URI"], "/"), PHP_URL_PATH), $_SERVER["REQUEST_METHOD"]);

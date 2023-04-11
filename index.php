<?php

declare(strict_types=1);

session_start();

require "core/bootstrap.php";

Router::direct(parse_url(rtrim($_SERVER["REQUEST_URI"], "/"), PHP_URL_PATH), $_SERVER["REQUEST_METHOD"]);

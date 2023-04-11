<?php

function dd(mixed $data)
{
    echo "<pre>";
    die(var_dump($data));
}

function view(string $page, array $data=[])
{
    extract($data);
    $pageView = implode("/", explode(".", $page));
    return require "views/$pageView.view.php";
}

function request(string $name): mixed
{
    if(isset($_GET[$name])){
        return $_GET[$name];
    }

    if(isset($_POST[$name])){
        return $_POST[$name];
    }
}

function redirect(string $route)
{
    return header("location: $route");
    exit;
}

function back(){
    $previous = $_SERVER['HTTP_REFERER'];
    header("location: $previous");
}
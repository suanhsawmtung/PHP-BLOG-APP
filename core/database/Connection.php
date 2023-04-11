<?php

class Connection{
    public static function make(Array $config)
    {
        try{
            $pdo = new PDO(
                "{$config['db']}:host={$config['host']}; dbname={$config['dbName']}",
                "{$config['username']}",
                "{$config['password']}"
            );

            return $pdo;
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}
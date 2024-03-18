<?php

namespace app\database;

use PDO;

class Connection
{
    private static ?PDO $connection = null;

    public static function connection()
    {

        dd($_ENV['DATABASE_NAME']);

        if (!self::$connection) {
            self::$connection = new PDO("mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']}", "{$_ENV['DATABASE_USER']}", "{$_ENV['DATABASE_PASSWORD']}", [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);
        }

        return self::$connection;
    }
}
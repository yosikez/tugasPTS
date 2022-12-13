<?php

namespace ForTech\App\Core;
class Database
{
    protected static $conn;
    protected static $username = 'root';
    protected static $password = '';
    protected static $dbname   = 'finalproject';
    protected static $host     = 'localhost';

    public function __construct()
    {
        Database::setConnection();
    }
    
    public static function setConnection()
    {
        self::$conn = new \PDO(
            "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                self::$username,
                self::$password
        );

        self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

}
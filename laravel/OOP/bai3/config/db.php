<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'db_pdo';

class db
{


    private static $db = null;

    public function __construct()
    {
    }

    public static function connect()
    {
        if (self::$db === null) {
            try {
                self::$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo '✅ Connected successfully';
            } catch (PDOException $e) {
                die('❌ Connection failed: ' . $e->getMessage());
            }
        }
        return self::$db;
    }


}

db::connect();
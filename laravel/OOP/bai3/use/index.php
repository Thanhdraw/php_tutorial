<?php

require_once __DIR__ . '/../config/db.php';



class User
{
    private static $pdo ;
    public function __construct()
    {
        if(self::$pdo === null){
            self::$pdo = db::connect();
        }

    }


}

$user = new User();

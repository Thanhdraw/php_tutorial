<?php

require 'db_require.php';


function db_connect(): PDO
{
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();

    }

}

$PDO = db_connect();
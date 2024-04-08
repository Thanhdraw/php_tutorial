<?php

$servername = "localhost:3307";
$username = "root";
$password = "Macbookpro@2020";
$database = "products";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Successfully connected to database";
} catch (PDOException $e) {
    die("❌ Connection failed:" . $e->getMessage());
}


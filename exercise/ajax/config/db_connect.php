<?php
require "db_require.php";

function db_connect()
{
    try {
        $conn = new PDO(DB_HOST, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}

function db_close($conn): void
{
    if (isset($conn)) {
        $conn = null;
    } else {
        echo "Connection failed";
    }
}

function sign_in_users($name, $email)
{

    global $pdo;
    try {
        $sql = "INSERT INTO user (name, email) VALUES (:name, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $message = "Sign in successfully";
        } else {
            $message = "Sign in failed";
        }
        return $message;

    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }

}

$pdo = db_connect();






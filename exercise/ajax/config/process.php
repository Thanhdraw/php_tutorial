<?php

require "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    sign_in_users($name, $email);

    $result = [
        'name' => $name,
        'email' => $email,
        'message' => sign_in_users($name, $email)

    ];
    echo json_encode($result);

}
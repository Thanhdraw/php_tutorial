<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký người dùng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Đăng ký người dùng</h2>
    <form action="registerForm.php" method="post">
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="telephoneNumber">Số điện thoại</label>
        <input type="number" id="telephoneNumber" name="telephoneNumber" required><br>

        <input type="submit" value="Đăng ký">
    </form>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $number = $_POST["telephoneNumber"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


        $usersData = file_get_contents('users.json');
        $users = json_decode($usersData, true);
        $newUser = array(
            "name" => $name,
            "email" => $email,
            "number" => $number

        );
        $users[] = $newUser;


        file_put_contents('users.json', json_encode($users));
        echo "Đăng ký thành công!";

        // In thông tin người dùng
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>";
            echo "Tên người dùng: " . $user['name'] . "<br>";
            echo "Email: " . $user['email'] . "<br>";
            echo "Số điện thoại: " . $user['number'] . "<br>";
            echo "</li><br>";
        }
        echo "</ul>";
    } else {
        echo "Định dạng không đúng";

    }

}


?>
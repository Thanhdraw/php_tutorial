<?php


//$path = "./pages/home.php";
//header("location: $path");
session_start();


if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $error = [];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (check_username($username)) {
            $error["username"] = "Username is not valid";
        }
        if (check_password($password)) {

            $error["password"] = "Password is not valid";

        }
        return $error;

    }


}


function check_username($data): bool
{
    $pattern = "/^(?=(?:\D*\d){0,2}\D*$)[a-zA-Z0-9_]{3,20}$/";
    if (preg_match($pattern, $data)) {
        return true;
    } else {
        return false;
    }

}

function check_password($data): bool
{
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/";
    if (preg_match($pattern, $data)) {
        return true;
    } else {
        return false;
    }

}


function check_login($username, $password): void
{

//    if ($username == "unitop" && $password == "Admin@123") {
//        return true;
//    } else {
//        return false;
//    }
    global $list_users;
    print_r($list_users);

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Login</title>
</head>
<body>
<form action="" method="POST">
    <h3>Login Here</h3>

    <label for="username">Username</label>
    <input type="text" placeholder="Email or Phone" name="username" id="username">
    <span id="passwordError" class="error" style="display: none;">Username is not valid</span>
    <?php if (isset($error)) {
        echo "<span style='color: red'>" . $error["username"] . "</span>";
    } ?>
    <label for="password">Password</label>
    <?php if (isset($error)) {
        echo "<span style='color: red'>" . $error["username"] . "</span>";
    } ?>
    <input type="password" placeholder="Password" name="password" id="password">
    <span id="passwordError" class="error" style="display: none;">Password is not valid</span>
    <button name="submit">Log In</button>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Google</div>
        <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
</form>
<script src="../public/js/check_login.js"></script>
</body>
</html>

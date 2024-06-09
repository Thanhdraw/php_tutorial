<?php


//$path = "./page/home.php";
//header("location: $path");

if (isset($_POST["submit"])) {
    $error = [];
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (!empty($username)) {
        $pattern_username = "/^[A-Za-z0-9_.]{6,32}$/";
        if (!preg_match($pattern_username, $username)) {
            $error["username"] = "Username is not valid";
        }
    } else {
        $error["username"] = "Username is required";
    }
    if (!empty($password)) {
        $pattern_password = "/^.{8,}$/";
        if (!preg_match($pattern_password, $password)) {
            $error["password"] = "Password is not valid";
        }
    } else {
        $error["password"] = "Password is required";
    }


    if (empty($error)) {
        if (check_login($username, $password)) {
            $_SESSION["user_login"] = $username;
            $_SESSION["is_login"] = true;
            //Cookie login
            if (isset($_POST["remember_me"])) {
                setcookie("user_login", $username, time() + 86400, "/");
                setcookie("is_login", true, time() + 86400, "/");
            }
            $random_token = bin2hex(random_bytes(16));
            setcookie($username, $random_token, time() + 86400, "/");
            redirect("?page=home");

        } else {
            $error["account"] = "Username or Password is not correct";
        }

//        $path = "./main.php";
//        header("location: $path");
    }
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
    <span class="error" style="color: #B31312;"><?php echo $error["username"] ?? ""; ?></span>
    <label for="password">Password</label>
    <input type="password" placeholder="Password" name="password" id="password">
    <span id="passwordError" class="error" style="display: none;">Password is not valid</span>
    <span class="error" style="color: #B31312;"><?php echo $error["password"] ?? ""; ?></span>
    <input type="checkbox" name="remember_me" id="remember_me"><label for="remember_me">Remember Me</label>
    <div class="forgot-pass"><a href="#">Forgot Password?</a></div>
    <button name="submit">Log In</button>
    <span class="error" style="color: #B31312;"><?php echo $error["account"] ?? ""; ?></span>
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Google</div>
        <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
</form>
<script src="../public/js/check_login.js"></script>
</body>
</html>

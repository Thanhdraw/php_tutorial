<?php
session_start();

// thiết lap khi login thành cong

if (isset($_POST["btn_submit"])) {
    // phất cờ
    $error = array();
    $correct = array();
    if (!empty($_POST["username"])) {
        // Hạ cờ
        $username = $_POST["username"];
        $pattern = '/^[a-zA-Z0-9_]{4,16}$/';
        if (!(strlen($username) >= 4 && strlen($username) <= 32)) {
            $error["username"] = 'The minimum character is 4 and more than 32 characters ⚠️';
        } else {
            if (preg_match($pattern, $username)) {
                $correct["username"] = '✅ username is valide';
            } else {
                $error["username"] = " ❌ Invalid username.";
            }
        }

    } else {
        $error["username"] = "không được để trống";
    }

    if (!empty($_POST["password"])) {
        $password = $_POST["password"];
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()-+=])[A-Za-z\d!@#$%^&*()-+=]{8,}$/';
        if (strlen($password) < 8) {
            $error["password"] = "The minimum character is 8 ⚠️";
        } else {
            if (preg_match($pattern, $password)) {
                $correct["password"] = '✅ Password is valide';
            } else {
                $error["password"] = " ❌ Invalid password.";
            }
        }
    } else {
        $error["password"] = "không được để trống";
    }
    // kết luận
    if (empty($error)) {

        $data = array(
            "username" => "unitop",
            "password" => "Admin@123",
        );
        if (($username == $data["username"]) && ($password == $data["password"])) {
            if (isset($_POST["remember_me"])) {
                setcookie("is_login", true, time() + 3600);
                setcookie("user_login", "unitop", time() + 3600);

            }
            $_SESSION["is_login"] = true;
            $_SESSION["user_login"] = "unitop";
            header("Location:main.php");
        } else {
            echo "Thong tin khong ton tai";
        }
        echo '<br>';
        echo $username . "-" . $password;
    } else {
        // print_r($error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <form action="" method="POST">
        <label for="username">Userame:<input type="text" name="username"></label>
        <p class="error" style="color:red">
            <?php echo !empty($error["username"]) ? $error["username"] : ""; ?>

        </p>
        <p class="correct">
            <?php echo !empty($correct["username"]) ? $correct["username"] : ""; ?>
        </p>
        <label for="password">Password: <input type="password" name="password" autocomplete="on"></label>
        <p class="error" style="color:red">
            <?php echo !empty($error["password"]) ? $error["password"] : ""; ?>

        </p>
        <p class="correct">
            <?php echo !empty($correct["password"]) ? $correct["password"] : ""; ?>
        </p>
        <input type="checkbox" name="remember_me" id="remember_me"><label for="remember_me">Ghi nhớ đăng nhập</label>
        <br>
        <br>
        <input type="submit" name="btn_submit" value="Login">
    </form>
</body>

</html>
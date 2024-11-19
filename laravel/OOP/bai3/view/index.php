<?php
// Đặt ở đầu file PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../model/User.php';


if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new User($email, $password);
    $user->info();
//    lấy kết quả truy vấn
    $result = $user->get('users',
        ['id', 'email', 'password', 'created_at'],
        ['email' => $email, 'password' => $password]);
    $result = $user->update('users',
        ['id', 'email', 'password', 'created_at'],
        ['email' => $email, 'password' => $password]);


    if ($user->isEmailExists('users', $email)) {
        $message['success'] = '✅ Đăng nhập thành công';
    } else if ($user->insert('users')) {
        $message['error'] = '❗Email đã tồn tại, vui lý nhập email khác';
    } else {
        $message['error'] = '❌ Đăng ký thất bại';
    }


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Wrapper Styling */
        .wrapper {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 {
            margin-bottom: 16px;
        }

        .text-3xl {
            font-size: 24px;
        }

        .font-bold {
            font-weight: bold;
        }

        .title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .row {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            border-bottom: 2px solid #ddd;
        }

        .row i {
            padding: 10px;
            color: #333;
        }

        .row label input {
            border: none;
            outline: none;
            padding: 10px;
            flex: 1;
        }

        .button input {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .button input:hover {
            background-color: #0056b3;
        }

        .signup-link {
            text-align: center;
            margin-top: 10px;
        }

        /* Dropdown Styling */
        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .dropbtn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <h2 class="text-center mb-4 text-3xl font-bold">
        <?php echo $message['error'] ?? $message['success'] ?? ''; ?>
    </h2>
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>

        </div>
    </div>
    <div class="title"><span>Login Form</span></div>
    <form action="" method="post">
        <div class="row">
            <i class="fas fa-user"></i>
            <label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>"
                       placeholder="Email or Phone" required/>
            </label>
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <label>
                <input type="password" name="password" value="<?php echo htmlspecialchars($password ?? ''); ?>"
                       placeholder="Password" required/>
            </label>
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
            <input type="submit" value="Login"/>
        </div>
        <div class="signup-link">Not a member? <a href="sign_up.php">Signup now</a></div>
    </form>
</div>
</body>
</html>

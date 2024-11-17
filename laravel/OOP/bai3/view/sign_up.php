<?php
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
    if (($user->isEmailExists('users', $email))) {
        $message['error'] = '❗Email đã tồn tại, vui lý nhập email khác';
    } else if ($user->insert('users')) {
        $message['success'] = '✅ Đăng ký  thành công';
    } else {
        $message['error'] = '❌ Đăng ký thất bại';
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Responsive Login Form HTML CSS | CodingNepal</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>


</head>

<body>

<div class="wrapper">
    <h2 class="text-center mb-4 text-3xl font-bold">

        <?php echo $message['error'] ?? $message['success'] ?? ''; ?>
        <?php ?>
    </h2>
    <div class="title"><span>Sign UP Form</span></div>
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
            <input type="password" name="password" value="<?php echo htmlspecialchars($password ?? ''); ?>"
                   placeholder="Password" required/>
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
            <input type="submit" value="Login"/>
        </div>
        <div class="signup-link">Not a member? <a href="index.php">Login now</a></div>
    </form>
</div>
</body>
</html>


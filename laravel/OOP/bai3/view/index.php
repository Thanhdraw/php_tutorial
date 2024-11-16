<?php
// Đặt ở đầu file PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../model/User.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
//        echo $email . '<br>' . $password . '<br>';

        $user = new User($email, $password);

       if( $user->info()){
           echo '<script>alert("Login thanh cong")</script>';
       }else{
           echo '<script>alert("Login thất bại ")</script>';
       }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Login Form HTML CSS | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>
<div class="wrapper">
    <div class="title"><span>Login Form</span></div>
    <form action="" method="post">
        <div class="row">
            <i class="fas fa-user"></i>
            <label>
                <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>" placeholder="Email or Phone" required />
            </label>
        </div>
        <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" placeholder="Password" required />
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
            <input type="submit" value="Login" />
        </div>
        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
    </form>
</div>
</body>
</html>

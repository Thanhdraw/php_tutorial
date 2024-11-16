<?php
$email = "";
$password = "";

// Kiểm tra khi form được submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Sử dụng JavaScript để hiển thị thông báo qua alert
//        echo "<script>
//            alert('Email bạn đã nhập là: " . htmlspecialchars($email) . "\\nPassword của bạn là: " . htmlspecialchars($password) . "');
//        </script>";


       $userInfo = new UserInfo($email, $password);

       if($userInfo->checkLogin() === 'Login successfully'){
           echo "<script>alert('Yeee Đăng nhập thành công! Email: " . htmlspecialchars($userInfo->getEmail()) . "');</script>";
       }
       else{
           echo "<script>alert('!!!! Đăng nhập thất baại! Email: " . htmlspecialchars($userInfo->getEmail()) . "');</script>";
       }

    }
}

class UserInfo
{
    private string $email;
    private string $password;

    public string $message;

    private array $db = [
        'email' => 'thanhdang@gmail.com',
        'password' => '28122001',
    ];

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function checkLogin(): string
    {

        if ($this->getEmail() === $this->db['email'] && $this->getPassword() === $this->db['password']) {
            $this->message = 'Login successfully';

        } else {
            $this->message = 'Login failed';
        }
        return $this->message;
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

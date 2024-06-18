<?php
require "config/process_regis.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $validation = regex($email, $password);
    if ($validation['error'] === true) {
        // Register the user
        if (register($validation['email'], $validation['password'])) {
            $message = "Đăng ký thành công";
        } else {
            // Log the error
            $message = "Đăng ký thất bại. Vui lòng thử lại.";
        }
    } else {
        $message = $validation['message'];
    }
}


?>

<form id="login_form" action="" method="post">

    <h1 class="text-center">Sign up</h1>
    <div id="mess_data" class="text-center">
        <p onclick="clearMessage()"><?php if (isset($message)) echo($message); ?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">

    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <div class="text-center">
        <label for="login">Trở về trang đăng nhập: <a href="?">Login</a></label>
    </div>

</form>

<script type="text/javascript">
    import * from "bootstrap-5.0.2-dist/js/scripts.js";
</script>
<script>

</script>
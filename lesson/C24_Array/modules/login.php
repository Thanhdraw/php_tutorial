<?php

$message = '';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $loginResult = login($email, $password);
    if ($loginResult['error'] == false) {
        print_r($loginResult);
        $message = $loginResult['message'];
        session_start();
        ob_start();
        $_SESSION['user'] = $loginResult['user'];
        ob_end_clean();
    } else {
        $message = $loginResult['message'];
    }

}


?>


<form id="login_form" method="post">
    <h1 class="text-center">Login</h1>
    <div id="mess_data" class="text-center">
        <p onclick="clearMessage()"><?php if (isset($message)) echo($message); ?></p>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
    <div id="sign_up">
        <lable for="login_form">Bạn chưa có tài khoản: <a href="?mod=modules&action=register">Click here</a></lable>
    </div>
</form>

<script type="text/javascript">
    import * from "bootstrap-5.0.2-dist/js/scripts.js";
    import * from "js/jQuery_v3.7.1.js";
</script>

<script>
    function clearMessage() {
        document.getElementById('mess_data').innerHTML = '';
    }

    // Tự động xóa thông báo sau 5 giây (5000 milliseconds)
    setTimeout(clearMessage, 5000);
</script>
<?php
$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);

$message = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    global $purifier;
    $email = $purifier->purify($_POST['email']);
    $password = $purifier->purify($_POST['password']);

    $message = check($email, $password);
    if ($message === true) {
        $message_register = register($email, $password);
    }


}


?>

<form id="login_form" action="" method="post">

    <h1 class="text-center">Sign up</h1>
    <div id="mess_data" class="text-center">
        <p onclick="clearMessage()"><?php if (isset($message_register)) echo($message_register); ?>
            <span id="countdown"
                  class="text-center">(5)</span>
        </p>
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
    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
    <div class="text-center">
        <label for="login">Trở về trang đăng nhập: <a href="?">Login</a></label>
    </div>

</form>

<script type="text/javascript">
    import * from "bootstrap-5.0.2-dist/js/scripts.js";
</script>
<script>
    function clearMessage() {
        let countdownElement = document.getElementById('countdown');
        let messDataElement = document.getElementById('mess_data');
        let countdown = 5; // thời gian countdown tính bằng giây

        let interval = setInterval(function () {
            countdown--;

            countdownElement.innerHTML = `(${countdown})`;

            if (countdown <= 0) {
                clearInterval(interval);
                messDataElement.innerHTML = '';
            }
        }, 1000);
    }

    // Chỉ chạy clearMessage nếu có thông báo
    document.addEventListener("DOMContentLoaded", function () {
        if (document.getElementById('mess_data').innerText.trim() !== '') {
            clearMessage();
        }
    });
</script>
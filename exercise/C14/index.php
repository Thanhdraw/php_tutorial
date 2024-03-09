<?php

require "config/email.php";
require "lib/email.php";
$send_to_email = "narutothanh28@gmail.com";
$sent_to_fullname = "DangQuocThanh";
$Subject = "Test ham send_mail";
$body = "<b>Noi dung email from send_mail</b>";
send_mail($send_to_email, $sent_to_fullname, $Subject, $body);


?>
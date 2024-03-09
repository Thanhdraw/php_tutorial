<?php

session_start();
setcookie("is_login", true, time() - 3600);
setcookie("user_login", "unitop", time() - 3600);
unset($_SESSION["user_login"]);


header("Location:login.php");

?>
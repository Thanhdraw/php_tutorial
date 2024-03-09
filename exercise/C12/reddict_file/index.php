<?php


session_start();

if (isset($_SESSION["login"])) {
    print_r($_SESSION);
    echo "thành công";
} else {
    echo "chưa đăng nhập";
}

?>
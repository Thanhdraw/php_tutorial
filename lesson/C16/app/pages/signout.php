<?php

#xử lý đăng xuat

if (isset($_SESSION['user_login'])) {
    session_unset();
    session_destroy();
    setcookie("user_login", "", time() - 86400, "/");
    setcookie("is_login", false, time() - 86400, "/");
    echo "Đăng xuat thành công";
    redirect("?page=login");
    exit();

} else {
    redirect("?page=home");
    exit();
}


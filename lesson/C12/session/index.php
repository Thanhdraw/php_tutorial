<?php
ob_start();
session_start();
echo "Trang chủ mới nè <br>";
print_r($_SESSION);

if (!isset($_SESSION["is_login"])) {
    header("Location:login.php");
} else {
    echo "<br>";
    echo $_SESSION["user_login"];

}


?>

<a href="Logout.php">Đăng Xuất</a>

</body>

</html>
<?php

/*
b1: Kiểm tra dữ liệu
b2: gán dữ liệu
b3: Kiểm tra login
b4: Xử lý login
---chuyển hướng cart.php
---Thông báo: lỗi đăng nhập

 */
if (isset($_POST['btn_login'])) {
	$info_user = array(
		"username" => "admin",
		"password" => "admin123",
	);
	$error = array();
	if (empty($_POST['username'])) {
		$error["username"] = "Không được để trống";
	} else {
		$username = $_POST['username'];
	}
	if (empty($_POST["password"])) {
		$error["password"] = "Không được để trống mật khẩu";
	} else {
		$password = $_POST["password"];
	}
	$username = $_POST['username'];
	$password = $_POST["password"];
	if (empty($error)) {
		// Dữ liệu đã nhập
		if (($username == $info_user["username"]) && ($password == $info_user["password"])) {
			$redirect_to = $_POST['redirect_to'];

			echo $redirect_to;
			// hearder là hàm , dùng để chuyển hướng
			header("Location: $redirect_to");
			// exit();
		} else {
			$error["login"] = "Du lieu hoac mat khau khog chinnh xac";
		}
	}
	if (!empty($error)) {
		print_r($error);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>Sign In</h3>
<form action="" method="POST">
	username: <input type="text" name="username" required>
	Password: <input type="password" name="password" required>
	<input type="hidden" name="redirect_to" value="cart.php">
	<input type="submit" name="btn_login" value="login">
</form>
</body>
</html>
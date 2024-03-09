<?php
if (isset($_POST["btn_submit"])) {

	$fullname = $_POST['fullname'];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST['email'];
	$number = $_POST["number"];
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>

		form{
			max-width: 100px;
			max-width: 100px;
			display: flex;
			flex-direction: column;

		}
		form  #username,#password{
			width: 200px;
			height: 20px;
			margin-bottom: 10px;
		}
		form #gioitinh{
			display: flex;
			justify-content: center;
		}
		form input{
			margin-bottom: 15px;
		}

	</style>
</head>
<body>

	<h1>Trang thông tin người dùng</h1>
	<form action="" method="POST">
		<label for="fullname">Họ và tên:<input type="text" name="fullname" required></label>
		<label for="username">Tên đăng nhập: <input type="text" name="username" id="" required></label>
		<label for="password">Mật khẩu: <input type="password" name="password" id="" required></label>
		<label for="email">Email: <input type="email" name="email" id="" required></label>
		<label for="phone">Số điện thoại: <input type="number" name="number" id="" required></label>
		<div class="gioitinh">
			<label for="gioitinh">Nam</label><input type="radio" name="gioitinh" value="male" checked="checked" id="">
			<label for="gioitinh">Nữ</label><input type="radio" name="gioitinh" value="female" id="">
		</div>

		<input type="submit" name="btn_submit" value="Submit">
	</form>

</body>
</html>
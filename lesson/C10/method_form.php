<?php

function show_arr($value) {
	if (is_array($value)) {
		print_r($value);

	} else {
		error_log("Oops nothing else");
	}
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$username = $_POST['username'];
	$email = $_POST['email'];
	echo '';
	echo "<pre> $username" . "$email </pre>";

}

?>

<!-- Liệu dữ liệu đã tồn tại hay chưa -->
<!-- Chúng ta phải dùng if() de kiem tra có dữ liệu hay không -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		Name: <input type="text" name="username">
		E-mail: <input type="text" name="email">
		<input type="submit" name="btn_login" value="Login">
	</form>
</body>
</html>
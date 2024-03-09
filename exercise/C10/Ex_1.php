<?php

if (isset($_POST['btn_submit'])) {
	if (!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST["password"];
		echo $username . "-" . $password;
	} else {
		echo 'Phai nhap day du username va password';
	}
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

	</style>
</head>
<body>


<h1>Sign in page</h1>

<form action="" method="POST">

	<label for="">Username</label><input type="text" name="username" id="username">
	<label for="password">Password</label><input type="password" name="password" id="password">
	<input type="submit" name="btn_submit" value="submit">
</form>
</body>
</html>


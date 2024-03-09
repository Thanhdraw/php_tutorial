<?php
if (isset($_POST["btn_submit"])) {
	// phất cờ
	$error = array();
	if (!empty($_POST["username"])) {
		// Hạ cờ
		$username = $_POST["username"];
	} else {
		$error["username"] = "không được để trống";
	}
	if (!empty($_POST["password"])) {
		$password = $_POST["password"];
	} else {
		$error["password"] = "không được để trống";
	}
	// kết luận
	if (empty($error)) {
		echo $username . "-" . $password;
	} else {
		// print_r($error);
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>

	<form action="" method="POST">
		<label for="username">Userame:<input type="text" name="username"></label>
		<p class="errorr">
			<?php echo !empty($error["username"]) ? $error["username"] : ""; ?>
		</p>
		<label for="password">Password: <input type="password" name="password"></label>
		<?php echo !empty($error["password"]) ? $error["password"] : ""; ?>

		<input type="submit" name="btn_submit" value="Login">
	</form>
</body>

</html>
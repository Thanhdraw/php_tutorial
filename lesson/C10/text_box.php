<?php

// if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['name'])) {
// 	$name = $_POST['name'];
// 	if (isset($name)) {
// 		echo $name;
// 	}

// 	print_r($_POST);
// }
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['username']) && isset($_POST["password"])) {
		echo $_POST['username'];
		echo $_POST["password"];
		clearstatcache();
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
<form action="" method="POST">
	username: <input type="text" name="username" required>
	Password: <input type="password" name="password" required>

	<input type="submit" name="btn_search" value="search">


</form>
</body>
</html>
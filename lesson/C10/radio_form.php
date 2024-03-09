<?php
/*
B1: Ktra form submit chua
b2: kiểm tra xem gender tồn tại

 */

if (isset($_POST["btn_submit"])) {
	$show_gender = array(
		"male" => "Nam",
		"female" => "Nữ");

	if (!empty($_POST["gender"])) {
		$gender = $_POST["gender"];
		echo $gender;
		echo $show_gender[$gender];
	} else {
		echo "You have to choice male or female";

	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Radio - Form</title>
</head>
<body>
	<h1>RADIO BUTTON</h1>
<form action="" method="POST">
	<input type="radio" name="gender" value="male" checked="checked"><label for="male">Nam</label> <br>
	<input type="radio" name="gender" value="female"><label for="female">Nữ</label> <br>

	<input type="submit" name="btn_submit" value="submit">
</form>
</body>
</html>
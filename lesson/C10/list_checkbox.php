<?php
if (isset($_POST["btn_submit"])) {
	#cách xử lý 1
	if (!empty($_POST["cart"])) {
		// foreach ($_POST["cart"] as $value) {
		// 	echo $value . "<br>";
		// }

		$list_check = implode(",", $_POST['cart']);
		echo $list_check;
	}
	#cách xử lý 2

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Radio - Form</title>
	<style>
		input{
			margin-top: 20px;
		}
	</style>
</head>

<body>
	<h1>lấy dự liệu từ list checkbox</h1>
	<form action="" method="POST">

		<input type="checkbox" id="cat_1" name="cart[]" value="1">
		<label for="vehicle1"> Thể thao</label><br>
		<input type="checkbox" id="cat_2" name="cart[]" value="2">
		<label for="vehicle2"> Xã hội</label><br>
		<input type="submit" name="btn_submit" value="sumit">
	</form>
</body>

</html>
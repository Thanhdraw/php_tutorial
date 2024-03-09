<?php

if (isset($_POST['btn_pay'])) {
	// print_r($_POST);
	$pay = $_POST['pay'];

	if (!empty($pay)) {
		header("location: thank.php");
		exit();
	} else {
		echo 'Ban phai chon hinh thuc thanh toan';
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
	<h1>Hinh Thuc Thanh Toan</h1>
	<form action="" method="POST">
		<select name="pay" id="">
			<option value=""selected="selected">--Chon--</option>
			<option value="vnpay">Thanh toan qua VNPAY</option>
			<option value="momo">MOMO</option>
			<option value="banking">Banking</option>
		</select>

		<input type="submit" name="btn_pay" value="ThanhToan">
	</form>

</body>
</html>
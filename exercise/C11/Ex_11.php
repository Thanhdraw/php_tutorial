<?php
require "./val/Regex.php";

if (isset($_POST["btn_submit"])) {
	$error = array();
	$correct = array();
	$hasError = false; // Biến để kiểm tra xem có lỗi không

	if (!empty($_POST["fullname"])) {
		$fullname = $_POST["fullname"];

		if (is_fullname($fullname)) {
			$correct["fullname"] = "Your fullname is valid ✅";
			$hasError = true;
		} else {
			$error["fullname"] = "⚠️ Your fullname is not valid";
		}

	} else {
		$error["fullname"] = "❌ không được để trống";
		$hasError = false;
	}
	if (!empty($_POST["username"])) {
		$username = $_POST["username"];
		if (!(strlen($username) >= 3 && strlen($username) <= 16)) {
			$error["username"] = "Độ dài ít nhất là 3 và dài nhất là 16 kí tự";
		} else {
			if (is_username($username)) {
				$correct["username"] = "Your username is valid ✅";
			} else {
				$error["username"] = "Your username is not valid ⚠️";
				$hasError = true;
			}
		}
	} else {
		$error["username"] = "❌ không được để trống";
		$hasError = true;
	}

	if (!empty($_POST["password"])) {
		$password = $_POST["password"];

		if (!(strlen($password) >= 8)) {
			$error["password"] = "Độ dài ít nhất là 8";
		} else {
			if (is_password($password)) {
				$correct["password"] = "Your password is valid ✅";
			} else {
				$error["password"] = "Mật khẩu của bạn không hợp lệ. Yêu cầu ít nhất một chữ cái thường, một chữ cái hoa, một số và một ký tự đặc biệt.";
				$hasError = true;
			}
		}
	} else {
		$error["password"] = "❌ không được để trống";
		$hasError = true;
	}
	if (!empty($_POST["phoneNumber"])) {
		$phoneNumber = $_POST["phoneNumber"];
		$pattern = '/^(\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})$/';
		if (!(strlen($phoneNumber) >= 4)) {
			$error["phoneNumber"] = "Độ dài ít nhất là 4";
		} else {
			if (preg_match($pattern, $phoneNumber)) {
				$correct["phoneNumber"] = "Your phoneNumber is valid ✅";
			} else {
				$error["phoneNumber"] = "Mật khẩu của bạn không hợp lệ. Yêu cầu ít nhất một chữ cái thường, một chữ cái hoa, một số và một ký tự đặc biệt.";
				$hasError = true;
			}
		}
	} else {
		$error["phoneNumber"] = "❌ không được để trống";
		$hasError = true;
	}

	if (empty($error)) {
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}

}

/*
1. xét về nút submit
2. kiem tra điều kiện từng input
3. Neu dung in ra , sai in ra lỗi
4. Sau đó gán giá trị.
 */
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign - In</title>
	<link rel="stylesheet" href="./style.css">
</head>

<body>
	<form action="" method="POST">

		<label for="">FullName:<input type="text" name="fullname">
			<p class="erorr">
				<?php echo form_error("fullname") ?>
			</p>
			<p class="correct">
				<?php echo form_correct("fullname") ?>
			</p>
		</label>
		<label for="">Username:<input type="text" name="username">
			<p class="erorr">
				<?php echo form_error("username") ?>
			</p>
			<p class="correct" style="margin: 0;">
				<?php echo form_correct("username") ?>
			</p>
		</label>
		<label for="">Password:<input type="password" name="password">
			<p class="erorr">
				<?php echo form_error("password") ?>
			</p>
			<p class="correct">
				<?php echo form_correct("password") ?>
			</p>
		</label>
		<label for="">Phone-Number:<input type="number" name="phoneNumber">
			<p class="erorr">
				<?php echo form_error("phoneNumber") ?>
			</p>
			<p class="correct">
				<?php echo form_correct("phoneNumber") ?>
			</p>
		</label>
		<div class="btn"><input type="submit" name="btn_submit" value="submit"></div>


	</form>
</body>

</html>
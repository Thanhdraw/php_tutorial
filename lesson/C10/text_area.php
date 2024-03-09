<?php
if (isset($_POST["btn_submit"])) {

	if (!empty($_POST['text'])) {
		$post = $_POST['text'];
		echo $post;
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
	<h1>Chi tiết</h1>
	<form action="" method="POST">
		<textarea name="text" id="" cols="30" rows="10"></textarea>
		<br>
		<input type="submit" name="btn_submit" value="Thêm bài viết">
	</form>

</body>
</html>
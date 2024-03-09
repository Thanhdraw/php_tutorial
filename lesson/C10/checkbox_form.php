<?php
if (isset($_POST['btn_submit'])) {
	// print_r($_POST);
	if (isset($_POST['rules'])) {
		$rules = $_POST['rules'];
		echo $_POST['rules'];
	} else {
		echo "Bạn cần đồng ý điều khoản của chúng tôi";
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
	<h1>Checkbox BUTTON</h1>
	<form action="" method="POST">
		<p style="width: 300px; height: 100px; overflow-y: scroll;">Lorem Ipsum is simply dummy text of the printing and
			typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
			unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not
			only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
			popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
			recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

		</p>
		<input type="checkbox" name="rules" value="yes" id="rules"><label for="rules">Đồng ý</label>
		<br>
		<br>
		<input type="submit" name="btn_submit" value="submit">
	</form>
</body>

</html>
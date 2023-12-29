<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lớp Hình chữ nhật </title>
</head>

<body>
    <form method="get" id="calculatorForm">
        <label for="length">Chiều dài:</label>
        <input type="text" id="width" name="width" value="<?php echo isset($width) ? $width : 0 ?>" required>

        <label for="width">Chiều rộng:</label>
        <input type="text" id="height" name="height" value="<?php echo isset($height) ? $height : 0 ?>" required>

        <label for="calculationType">Chọn loại tính toán:</label>
        <select name="action" id="calculationType" name="calculationType" required>
            <option <?php if (isset($action) && $action == "perimeter"): ?> selected <?php endif; ?> value="perimeter">
                Chu vi </option>
            <option <?php if (isset($action) && $action == "area"): ?> selected<?php endif; ?> value="area">
                Diện tích
            </option>
        </select>

        <button type="submit">Tính toán</button>
        <button type="submit" onclick="resetValues()">Reset giá trị</button>

    </form>

</body>

<script>
    function resetValues() {
        document.getElementById("width").value = "width";
        document.getElementById("height").value = "height";
        document.getElementById("calculationType").selectedIndex = 0;
    }
</script>

</html>

<?php
require "rectangle.php";
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["action"])) {
    $width = $_GET["width"];
    $height = $_GET["height"];
    $action = $_GET["action"];
    $rect = new Rectangle($width, $height);
    if ($action == "perimeter") {
        $result = "perimeter is: " . $rect->perimeter();
    } else {
        $result = "perimeter is: " . $rect->area();
    }
    echo $result;
}



?>
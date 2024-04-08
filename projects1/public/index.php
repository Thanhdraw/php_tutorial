<?php
global $conn;
require '../config/config.php';


try {
    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL PDO Example</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hiình ảnh</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Lặp qua các dòng kết quả từ cơ sở dữ liệu và hiển thị trên bảng
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['ProductID'] . "</td>";
            echo "<td>" . $row['ProductName'] . "</td>";
            echo "<td>" . $row['CategoryID'] . "</td>";
            echo "<td><img src='{$row['ImageURL']}' width='100' height='100'></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

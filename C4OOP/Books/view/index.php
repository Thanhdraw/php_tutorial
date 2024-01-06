<?php
// Thực hiện truy vấn SELECT để lấy dữ liệu từ cơ sở dữ liệu
include "db.php";

$sql = "SELECT * FROM sach";
$result = $conn->query($sql);

// Kiểm tra và hiển thị dữ liệu
$books = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

;

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Books</title>
    <style>
        /* style.css */

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book {
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }

        .book h3 {
            margin-bottom: 5px;
            color: #007BFF;
        }

        .book p {
            margin: 5px 0;
        }

        /* Add more styles as needed */
    </style>
</head>

<body>

    <div class="container">

        <?php
        // Hiển thị dữ liệu từ mảng $books
        foreach ($books as $book) {
            echo '<div class="book">';
            echo '<h3>Mã sách: ' . $book['MaSach'] . '</h3>';
            echo '<p>Tiêu đề: ' . $book['TieuDe'] . ' - Tác giả: ' . $book['TacGia'] . '</p>';
            echo '<p>Năm xuất bản: ' . $book['NamXuatBan'] . '</p>';
            echo '</div>';
        }
        ?>

    </div>

</body>

</html>
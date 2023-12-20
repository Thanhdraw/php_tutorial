<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: 200px;
            height: 200px;
            display: flex;
            flex-direction: column;
            margin: 100px auto;

        }

        button {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <h1>Ứng dụng Product Discount Calculator</h1>
    <form method="post" action="">
        <label for="ProductDescription"> Mô tả của sản phẩm </label>
        <input type="text" name="ProductDescription" id="ProductDescription" required>
        <label for="ListPrice"> Giá niêm yết của sản phẩm </label>
        <input type="number" name="ListPrice" id="ListPrice" required>
        <label for="DiscountPercent">Tỷ lệ chiết khấu (phần trăm)</label>
        <input type="number" name="DiscountPercent" id="DiscountPercent" required>
        <label for="result">Kết quả</label>



        <button type="submit">Tính chiết khấu</button>
    </form>

</body>

</html>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["ListPrice"]) && isset($_POST["DiscountPercent"])) {
        $ProductDescription = $_POST["ProductDescription"];
        $list_price = $_POST["ListPrice"];
        $dis_percent = $_POST["DiscountPercent"];
        $result = Discount_Amount($list_price, $dis_percent);
        $result_2 = afterDiscount($result, $list_price);
        number_format($result, 2);
        echo "San phẩm là: " . $ProductDescription . "<br>";
        echo "Luonng chiet khấu: " . number_format($result, 2) . " VND" . "<br>";
        echo "Giá sau chiết khấu: " . number_format($result_2, 2) . " VND";
    }
}


function Discount_Amount($list_price, $dis_percent)
{
    $result = $list_price * ($dis_percent / 100) * 0.1;
    return $result;
}
function afterDiscount($result, $list_price)
{
    $result_2 = $list_price - $result;
    return $result_2;
}




?>
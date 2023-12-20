<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ứng dụng chuyển đổi tiền</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #converter {
            margin: 50px auto;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <form method="post" id="converter">
        <h2>Chuyển đổi USD sang VND</h2>
        <label for="usdAmount">Nhập số tiền USD:</label>
        <input type="number" id="usdAmount" name="usdAmount" placeholder="Nhập số tiền USD" step="0.01" min="0"
            required>
        <button type="submit">Chuyển đổi</button>
        <p id="result">
            <?php ?>
        </p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["usdAmount"])) {
                $usdAmount = $_POST["usdAmount"];
                $result = convertCurrency($usdAmount);
                echo "<b>$result</b>" . " VND";
            }
        }

        function convertCurrency($usdAmount)
        {
            $vn_currency = $usdAmount * 23000;
            return number_format($vn_currency, 2);

        }
        ?>
    </form>
</body>

</html>


<?php




?>
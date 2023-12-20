<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number to Words</title>
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

    <form method="post" action="">
        <label for="InventmentAmount"> Lượng tiền đầu tư ban đầu </label>
        <input type="text" name="InventmentAmount" id="InventmentAmount" required>
        <label for="YearlyInterestRate">Lãi suất năm (%) </label>
        <input type="text" name="YearlyInterestRate" id="YearlyInterestRate" required>
        <label for="NumberofYears">Number of Years</label>
        <input type="text" name="NumberofYears" id="NumberofYears" required>
        <label for="result">Kết quả</label>




        <button type="submit">Chuyển đổi</button>
    </form>

</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["InventmentAmount"]) && isset($_POST["YearlyInterestRate"]) && isset($_POST["NumberofYears"])) {
        $inputInvent = $_POST["InventmentAmount"];
        $inputYearly = $_POST["YearlyInterestRate"];
        $inputYears = $_POST["NumberofYears"];

        $Future_Value = Calculate($inputInvent, $inputYearly, $inputYears);
        echo "<div id='result'>Future Value: $" . number_format($Future_Value, 2) . "</div>";
    }

}

function Calculate($inputInvent, $inputYearly, $inputYears)
{
    $Future_Value = $inputInvent + ($inputInvent * $inputYearly / 100) * $inputYears;

    return $Future_Value;
}



?>
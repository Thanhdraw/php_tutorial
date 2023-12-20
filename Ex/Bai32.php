<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nnumber"])) {
        $inputNumber = $_POST["nnumber"];

        if (is_numeric($inputNumber) && $inputNumber >= 0 && $inputNumber <= 999) {
            $result = convertToWords($inputNumber);
            echo "Chữ số {$inputNumber} là: {$result}";
        } else {
            echo "Vui lòng nhập số nguyên không âm có tối đa 3 chữ số.";
        }
    } else {
        echo "Trường nnumber không tồn tại trong dữ liệu POST.";
    }
}

function convertToWords($number)
{
    $ones = array(
        0 => '',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine'
    );

    $teens = array(
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen'
    );

    $tens = array(
        10 => 'ten',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety'
    );

    if ($number == 0) {
        return 'zero';
    }

    $words = '';

    // Xử lý hàng trăm
    $hundreds = floor($number / 100);
    echo " $hundreds<br>";

    if ($hundreds > 0) {
        $words .= $ones[$hundreds] . ' hundred';
        echo " $number<br>";
        $number %= 100;
        echo " $number<br>";
        if ($number > 0) {
            $words .= ' and ';
        }
    }

    // Xử lý hàng chục và hàng đơn vị
    if ($number < 10) {
        $words .= $ones[$number];
    } elseif ($number < 20) {
        $words .= $teens[$number];
    } else {
        $tensDigit = floor($number / 10) * 10;
        echo "$tensDigit";
        $onesDigit = $number % 10;
        $words .= $tens[$tensDigit];
        if ($onesDigit > 0) {
            $words .= ' ' . $ones[$onesDigit];
        }
    }

    return $words;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number to Words</title>
</head>

<body>

    <form method="post" action="">
        <label for="nnumber">Nhập số nguyên (0-999): </label>
        <input type="text" name="nnumber" id="nnumber" required>
        <button type="submit">Chuyển đổi</button>
    </form>

</body>

</html>
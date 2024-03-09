<?php

// 1. Tính tổng các số chẵn từ 1 dến n

$n = 10;
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $sum += $i;
    }
}

echo "Tổng các số chẵn là: $sum" . "<br>";

echo "<br> ==================================== <br>";

$n2 = 9;

$sum2 = 0;


for ($i = 3; $i <= $n2; $i++) {
    if ($i % 3 == 0) {
        $sum2 += (1 / $i);
    }
}

echo "Bai 2: " . number_format($sum2, 2);

echo "<br> ==================================== " . "<br>";

$n3 = 10;

$sum3 = 0;


for ($i = 1; $i <= $n3; $i++) {

    $sum3 += ($i / ($i + 1));

}

echo "Bai 3: " . number_format($sum3, 2);

echo "<br> ==================================== " . "<br>";
// Giải phương trình 4x2 - 2x - 6 = 0 (2)


$a = 3;
$b = 2;
$c = 5;

echo "Bài 4  <br>";

$delta = (pow($b, 2) - 4 * $a * $c);
echo "delta: $delta" . "<br>";

switch ($delta) {
    case $delta > 0:
        echo "Phuong trình có 2 ngh phan biet: <br>";
        echo "x1:" . (-($b) + sqrt($delta)) / (2 * $a) . "<br>";
        echo "x2:" . (-($b) - sqrt($delta)) / (2 * $a) . "<br>";
        break;
    case $delta == 0:
        echo "Phuong trình có nghiem kep: x1=x2= " . $x1 = $x2 = (-$b) / 2 * $a . "<br>";
        break;
    case $delta < 0:
        echo "Phương trình vô nghiệm";
        break;
}
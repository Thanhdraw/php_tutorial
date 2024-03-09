<?php


// $a = 2;
// if ($a > 0 && $a % 2 == 0) {
//     echo "Kết quả: " . $a += 1;
// } else {
//     echo "Oops điều kiện của biểu thức không thoả";
// }



$array = array(1, 2, 3, 5, 6, 7);

$array2 = ["Thanh", 9, 10];


// Khai báo mảng đa chiều
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Hoặc có thể sử dụng cú pháp ngắn hơn từ PHP 5.4 trở lên
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];



$c = 0;
$i = 0;
while ($i <= 10) {
    $c += $i;
    $i += 2;
    // echo "$i<br>";

}

echo "KQ:$c";


?>
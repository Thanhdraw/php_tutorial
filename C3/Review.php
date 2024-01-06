<!-- 1.mảng 1 chiều -->

<?php


$array = [1, 54, 5, 6, 7, 4];

// thêm 1 phần tử
$array[] = 2;

// thêm phầ tử vào vị trí
$array[7] = 199;

// update phần tử
$array["1"] = 10;

// Xoá phần tử của mảng

unset($array[1]);
$arr = array_values($array);
print_r($arr);

// dùng slice xoá phần tử của mảng
array_splice($array, 2, 1);
print_r($array);


$multiDimArray = array(
    array('a', 'b', 'c'),
    array('d', 'e', 'f'),
    array('g', 'h', 'i')
);

// Thêm phần tử 'x' vào mảng con có chỉ số 1
$multiDimArray[1][] = 'x';

// In mảng sau khi thêm
print_r($multiDimArray);

?>
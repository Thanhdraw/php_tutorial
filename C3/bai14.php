<?php


$array_1 = [1, 0, 3, 5, 67, 7];
// print_r($array_1);


function findMin($value)
{
    $min = $value[0];

    for ($i = 1; $i < count($value); $i++) {
        if ($value[$i] < $min) {
            $min = $value[$i];

        } else {
            continue;
        }


    }
    echo "Min in array_1 is: $min<br>";


}
function findMax($value)
{
    $max = $value[0];

    for ($i = 1; $i < count($value); $i++) {
        if ($value[$i] > $max) {
            $max = $value[$i];

        } else {
            continue;
        }


    }
    echo "Max in array_1 is: $max<br>";


}


findMin($array_1);
findMax($array_1);

// echo "=>Sắp xếp mảng tăng dần:<br>";
// sort($array_1);
// print_r($array_1);
// echo "<br>";
// echo "=>Sắp xếp mảng giảm dần:<br>";
// rsort($array_1);
// print_r($array_1);
// echo "<br>";
// echo "=>Sắp xếp mảng tăng dần theo giá trị , giảm theo index:<br>";
// asort($array_1);
// print_r($array_1);
// echo "<br>";
// echo "=>Sắp xếp mảng giảm dần theo giá trị ,tăng theo index:<br>";
// ksort($array_1);
// print_r($array_1);
// echo "<br>";


$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];
// thêm giá trị vào mảng, thêm vào cuối
$tasks[] = ['Build something matter in PHP', 2];
$tasks[] = ['thêm vào cuối', 2];

// update
$tasks[1] = ["update php", 3];
// Xoá mảng

// unset($tasks[2]);

array_splice($tasks[2], 2, 1);

print_r($tasks);

// foreach ($tasks as $index => $value) {
//     printf("Index: %d, Task: %s, Priority: %d", $index, $value[0], $value[1]);
//     echo PHP_EOL;
// }



?>
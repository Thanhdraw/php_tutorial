<?php
$array_first = array(1, 3, 5, 7, 9);


// user: id, fullname, email,




$user = array(
    "id" => 1,
    "fullname" => "DangQuocThanh",
    "email" => "thanh@gmail.com",
);



// sữa value phần tử cho mảng
$user["fullname"] = "ThanhDang";

echo "<pre>";
print_r($user);
echo "</pre>";

// Xoá phần tử
unset($user["fullname"]);

echo "<pre> Sau khi xoá <br>";
print_r($user);
echo "</pre>";
// unset($user["fullname"]);
// Array
// (
//     [id] => 1
//     [email] => thanh@gmail.com
// )
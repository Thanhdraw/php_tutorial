<?php



$list_user = array(
    1 => array(
        "id" => 1,
        "fullname" => "DangQuocThanh",
        "email" => "dangquocthanh2812@gmail.com"
    ),
    2 => array(
        "id" => 2,
        "fullname" => "Nguyen Van A",
        "email" => "dangquocthanh2812@gmail.com"
    ),
    3 => array(
        "id" => 3,
        "fullname" => "Nguyen van B",
        "email" => "dangquocthanh2812@gmail.com"
    ),
);

// Thêm phần tử 
$list_user[4] = array(
    "id" => 4,
    "fullname" => "thanhdang",
    "email" => "adas@gmail.com"
);


foreach ($list_user as $value) {
    echo "<pre>";
    echo ($value["id"]);
    echo ($value["fullname"]);
    echo ($value["email"]);

    echo "</pre>";
}

// Xuất thông tin của từng phần tử
// $info = $list_user[1];
// echo "<pre>";

// print_r($info);
// echo "</pre>";

// echo "<pre>";

// print_r($list_user);
// echo "</pre>";

// Thay đổi thông tinn phần tử
$list_user[1]["fullname"] = "Minh thảo";

// Xoá phần tử thứ 3
unset($list_user[3]);

// Xoá giá trị id của phẩn tử thứ 2
unset($list_user[2]["id"]);

// echo "<pre>";
// echo "<br>Sau khi cap nhật";
// print_r($list_user);
// echo "</pre>";



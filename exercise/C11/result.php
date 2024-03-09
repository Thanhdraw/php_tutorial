<?php
require "val/Regex.php";

if (isset($_POST["btn_submit"])) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}


/* 
1. xét về nút submit
2. kiem tra điều kiện từng input
3. Neu dung in ra , sai in ra lỗi
4. Sau đó gán giá trị.
*/
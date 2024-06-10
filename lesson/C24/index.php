<?php

require 'config/db_connect.php';
require "config/url.php";
global $PDO;


?>


<?php


$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'modules';
$action = !empty($_GET['action']) ? $_GET['action'] : 'login';
$path = $mod . '/' . $action . '.php';

if (file_exists($path)) {
    require $path;
} else {
    echo 'Không tìm thấy file';
}




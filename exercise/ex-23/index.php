<?php
session_start();
ob_start();

require "lib/function.php";
require "config/db_connect.php";
require "lib/function_data.php";
require "lib/function_cart.php";
global $connect_db;
get_header();


?>

<?php

$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
$action = !empty($_GET['action']) ? $_GET['action'] : 'main';
$path = "modules/{$mod}/{$action}.php";
if (file_exists($path)) {
    require $path;
} else {
    get_404();
}

?>

<?php


get_footer();


?>
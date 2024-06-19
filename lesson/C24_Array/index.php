<?php

require 'config/db_connect.php';
require "config/url.php";
require "config/function.php";
require "config/process_register.php";
require "config/process_login.php";
require "config/email_auth.php";
require "vendor/autoload.php";
global $PDO;
get_header();


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

?>

<?php

get_footer(); ?>


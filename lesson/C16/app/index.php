<!-- Header -->
<?php

require "lib/share.php";
require "./data/user.php";
//require_once "../data/user.php";
//
?>

<?php
// $page = $_GET["page"];
$page = !empty($_GET["page"]) ? $_GET["page"] : "home";
$path = "pages/{$page}.php";

// echo $path;

if (file_exists($path)) {
    require $path;
} else {
    require "inc/404.php";
}

?>



<?php
require "lib/share.php";


get_header();

?>

<?php

if (!empty($_GET["page"])) {
    $page = $_GET["page"];

} else {
    $page = "home";
}

$path = "pages/{$page}.php";

file_exists($path) ? require $path : require "inc/404.php";


?>

<?php
get_footer();
?>
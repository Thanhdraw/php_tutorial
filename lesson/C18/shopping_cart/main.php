<?php
require "lib/share.php";


get_header();
change_color();
?>
<?php
$mod = !empty($_GET["mod"]) ? $_GET["mod"] : "home";
$action = !empty($_GET["action"]) ? $_GET["action"] : "main";
$path = "modules/{$mod}/{$action}.php";

// echo $path;

if (file_exists($path)) {
    require $path;
} else {
    require "inc/404.php";
}

?>

<?php
get_footer();
?>
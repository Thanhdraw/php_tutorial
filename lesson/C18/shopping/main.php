<?php

require "data/pages.php";
require "data/product.php";


require "lib/share.php";
require "lib/pages.php";
require "lib/product.php";
require "lib/show_arr.php";
require_once "lib/product.php";


get_header();

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
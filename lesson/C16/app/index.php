<!-- Header -->
<?php
session_start();

ob_start();
require "lib/share.php";
require "./data/user.php";
require "./lib/data.php";
require "./lib/users.php";
require "./lib/url.php";

//require_once "../data/user.php";
//


?>

<?php
// $page = $_GET["page"];
//$page = !empty($_GET["page"]) ? $_GET["page"] : "home";


if (!empty($_GET["page"])) {

    $page = $_GET["page"];

} else {
    $page = "home";
}

$path = "page/{$page}.php";

if (!empty($_COOKIE["user_login"])) {
    $_SESSION["is_login"] = $_COOKIE["is_login"];
    $_SESSION["user_login"] = $_COOKIE["user_login"];
}

if (!is_login() && $page != "login") {
    redirect("?page=login");
    exit();
}


if (file_exists($path)) {
    require $path;


} else {
    require "inc/404.php";
    echo $path;
}

?>



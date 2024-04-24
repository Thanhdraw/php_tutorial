<?php
$action = !empty($_GET["action"]) ? $_GET["action"] : "main";


/*
 * tru tong so tien va so luong cua cart
 *
 * */

show_arr(update_cart());
show_arr($_SESSION['cart']['info']);


//show_arr(update_cart());


?>


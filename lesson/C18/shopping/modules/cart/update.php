<?php
if (isset($_POST['btn_update_cart'])) {
    update_cart($_POST['qty']);
    redirect("?mod=cart&action=show");

    show_arr($_POST);
}




?>


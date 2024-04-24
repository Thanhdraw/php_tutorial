<?php
/**
 * - xoá sản phẩm nnào -> id nào ?
 *
 *
 */
$id_product = !empty($_GET['id']) ? $_GET['id'] : 0;
delete_cart($id_product);
redirect('?mod=cart&action=show');
//dau tien lay danh sach bien tạm

//echo "<pre>";
//echo "=======Danh sach luc dau mua: ===============";
//show_arr($_SESSION['cart']['buy']);
//echo "</pre>";
//
//echo "<pre>";
//echo "=======Danh sach luc sau mua: ===============";
//show_arr($_SESSION['cart']['info']);
//echo "</pre>";




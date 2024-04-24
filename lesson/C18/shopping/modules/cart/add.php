<?php


//lấy được thông tin sản phẩm cần thêm vào giỏ hàng
$id_product = !empty($_GET['id']) ? $_GET['id'] : 0;
$item = get_product_by_code($id_product);

#them thong tin vao gio hang
#chỉ có so luong , và tong gia thay doi


$quantity = 1;
if (isset($_SESSION['cart']['buy'][$id_product]) &&
    array_key_exists($id_product, $_SESSION['cart']['buy'])) {

    $quantity = $_SESSION['cart']['buy'][$id_product]['quantity'] + 1;


};
$message = " ✅ Successfully! Your product has been added to cart!";


$_SESSION['cart']['buy'][$id_product] = [
    'id' => $item['id'],
    'product_code' => $item['product_code'],
    'product_name' => $item['product_name'],
    'quantity' => $quantity,
    'image' => $item['image'],
    'price' => $item['price'],
    'Description' => $item['Description'],
    'total' => $quantity * $item['price'],

];

$num_order = 0;
$total_price = 0;

foreach ($_SESSION['cart']['buy'] as $key => $item) {

    $num_order += $item['quantity'];
    $total_price += $item['total'];
}

$_SESSION['cart']['info'] = [
    'total_quantity' => $num_order,
    'total_price' => number_format($total_price, 0, ',', '.'),
];



redirect("?mod=cart&action=show");


//
//$_SESSION['cart']['info'] = [
//    'total_quantity' =>  array_sum(array_column($_SESSION['cart']['buy'], 'quantity')),
//    'total_price' => number_format(array_sum(array_column($_SESSION['cart']['buy'], 'total')), 0, ',', '.'),
//];


show_arr($_SESSION['cart']);








<?php


//Lấy thể loại sản phẩm
function get_cat_by_id($id)
{
    global $list_category;
    if (array_key_exists($id, $list_category)) {
        return $list_category[$id];
    }

}

//lâấy sản phẩm từ loại sp

function get_list_product_by_cat($cat_id): array
{
    global $list_product;
    $list = [];
    foreach ($list_product as $item) {
        if ($item['category_id'] == $cat_id) {
            $item['url'] = "?mod=product&action=detail&id=" . $item['product_code'];
            $list[] = $item;
        }
    }
    return $list;
}


function main_product()
{
    global $list_product;
    return $list_product;
}

//lấy chi tiết sản phẩm bằng mã sản phaẩm vídụ: HCA00031

function get_product_by_code($id)
{
    global $list_product;
    foreach ($list_product as $item) {
        if ($item['product_code'] == $id) {
            $item['url'] = "?mod=cart&action=add&id=" . $item['product_code'];
            $item['url_detail'] = "?mod=product&action=detail&id=" . $item['product_code'];
            return $item;
        }
    }


}

//function add_to_cart($product_added)
//{
//    global $list_product;
//    $count = 0;
//    if (array_key_exists($product_added, $list_product)) {
//        $list_product[$product_added]['quantity']++;
//        print_r($list_product);
//    }
//}

function get_list_buy_Cart(): array
{
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart']['buy'] as $item) {
            $item['url_delete'] = "?mod=cart&action=delete&id=" . $item['product_code'];
            $_SESSION['cart']['buy'][$item['product_code']] = $item;
        }
        return $_SESSION['cart']['buy'];
    }
    return [];

}

function get_price_quantity_Cart()
{
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info'];
    }
    return false;

}

function update_info_cart()
{


    return $_SESSION['cart']['info'] = get_price_quantity_Cart();

}

//xoa 1 san pham in cart
function delete_cart($id_product)
{
    if (isset($_SESSION['cart'])) {
        if (array_key_exists($id_product, $_SESSION['cart']['buy'])) {
            unset($_SESSION['cart']['buy'][$id_product]);
            update_info_cart();
        }

    }
    return false;


}

function delete_all_cart()
{
    unset($_SESSION['cart']);
}


function update_cart($qty): void
{
    foreach ($qty as $key => $new_qty) {
        $qty = $_SESSION['cart']['buy'][$key]['quantity'] = $new_qty;
        $_SESSION['cart']['buy'][$key]['total'] = $new_qty * $_SESSION['cart']['buy'][$key]['price'];
    }
    update_info_cart();
}
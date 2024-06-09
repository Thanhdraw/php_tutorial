<?php

function add_cart($id)
{

    $product_item = (!empty($id)) ? get_product_by_id($id) : false;
    if ($product_item !== false) {
        $_SESSION['cart']['buy'] ??= [];

        $quantity = 1;
        if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
            $quantity = $_SESSION['cart']['buy'][$id]['quantity'] + 1;
        }
        $_SESSION['cart']['buy'][$id] = [
            'id' => $product_item->ProductCode,
            'name' => $product_item->ProductName,
            'price' => $product_item->Price,
            'quantity' => $quantity,
            'image' => $product_item->ImageURL,
            'total' => $product_item->Price * $quantity,
            'Description' => $product_item->Description,
            'CategoryID' => $product_item->CategoryID,
            'url_detail' => '?mod=product&action=detail&id=' . $product_item->ProductCode
        ];

        update_cart_info();
    } else {
        return false;
    }

}

function update_cart_info()
{
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $key => $value) {
            if (empty($key) || $key === '0') {
                continue;
            }
            if (!empty($value['quantity']) && !empty($value['total'])) {
                $num_order += $value['quantity'];
                $total += $value['total'];
            }
        }
        $_SESSION['cart']['info'] = [
            'num_order' => $num_order,
            'total' => $total
        ];
    }
}


function update_cart($value, $key)
{

    if (isset($_SESSION['cart']['buy'][$key])) {
        $_SESSION['cart']['buy'][$key]['quantity'] = $value;
        $_SESSION['cart']['buy'][$key]['total'] = $_SESSION['cart']['buy'][$key]['price'] * $value;
    }

    update_cart_info();

}

function delete_cart($id)
{
    if (isset($_SESSION['cart']['buy'][$id])) {
        unset($_SESSION['cart']['buy'][$id]);
    }
    update_cart_info();

}
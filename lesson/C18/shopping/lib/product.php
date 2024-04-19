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
    foreach ($list_product as $item) {
        if ($item['category_id'] == $cat_id) {
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
            return $item;
        }
    }


}

function add_to_cart($product_added)
{
    global $list_product;
    $count = 0;
    if (array_key_exists($product_added, $list_product)) {
        $list_product[$product_added]['quantity']++;
        print_r($list_product);
    }
}



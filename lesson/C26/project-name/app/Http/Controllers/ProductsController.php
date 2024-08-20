<?php

namespace App\Http\Controllers;

class ProductsController extends Controller
{
    //
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $title = "This is index page for products";
        $name = "DangQuocThanh";
        // Sử dụng mảng để truyền dữ liệu
        $myArray = $this->db_array();
        return view('products.index', ['myArray' => $myArray], compact('title', 'name'));
    }

    public function db_array()
    {
        $myArray = [
            [
                'id' => 1,
                'name' => 'iPhone15',
                'price' => 300,
                'is_new' => true,
                'description' => 'This is description for iPhone15'
            ],
            [
                'id' => 2,
                'name' => 'Samsung Galaxy S23',
                'price' => 280,
                'is_new' => true,
                'description' => 'This is description for Samsung Galaxy S23'
            ],
            [
                'id' => 3,
                'name' => 'Google Pixel 7',
                'price' => 250,
                'is_new' => false,
                'description' => 'This is description for Google Pixel 7'
            ],
            [
                'id' => 4,
                'name' => 'OnePlus 11',
                'price' => 220,
                'is_new' => true,
                'description' => 'This is description for OnePlus 11'
            ],
            [
                'id' => 5,
                'name' => 'Xiaomi 13',
                'price' => 200,
                'is_new' => false,
                'description' => 'This is description for Xiaomi 13'
            ],
            [
                'id' => 6,
                'name' => 'Huawei P50 Pro',
                'price' => 230,
                'is_new' => false,
                'description' => 'This is description for Huawei P50 Pro'
            ],
            [
                'id' => 7,
                'name' => 'Sony Xperia 1 IV',
                'price' => 270,
                'is_new' => true,
                'description' => 'This is description for Sony Xperia 1 IV'
            ],
            [
                'id' => 8,
                'name' => 'Oppo Find X5 Pro',
                'price' => 240,
                'is_new' => false,
                'description' => 'This is description for Oppo Find X5 Pro'
            ],
            [
                'id' => 9,
                'name' => 'Asus ROG Phone 6',
                'price' => 290,
                'is_new' => true,
                'description' => 'This is description for Asus ROG Phone 6'
            ],
            [
                'id' => 10,
                'name' => 'Motorola Edge 30 Ultra',
                'price' => 210,
                'is_new' => false,
                'description' => 'This is description for Motorola Edge 30 Ultra'
            ]
        ];

        return $myArray;
    }


    public function details($id)
    {
        $myArray = $this->db_array();
        // Nếu $myArray là mảng, sử dụng Collection hoặc xử lý như mảng
        $product = collect($myArray)->firstWhere('id', $id);

        if (!$product) {
            abort(404);
        }

        return view('products.detail', ['product' => $product]) ?? 'undefined';
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('layouts.user.master');
    }


    public function about()
    {
        return 'Đây là trang about';
    }

    public function contact()
    {
        return view('layouts.user.contact.index');
    }
    public function products()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'iPhone 14',
                'content' => 'Điện thoại iPhone 14 với màn hình OLED 6.1 inch, chip A15 Bionic',
                'img' => 'iphone14.jpg',
                'price' => 999.99,
                'cat_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Samsung Galaxy S23',
                'content' => 'Điện thoại Samsung Galaxy S23, màn hình 6.1 inch, Snapdragon 8 Gen 2',
                'img' => 'samsung_s23.jpg',
                'price' => 899.99,
                'cat_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'MacBook Air M2',
                'content' => 'Laptop MacBook Air M2, màn hình Retina 13.6 inch, chip Apple M2',
                'img' => 'macbook_air_m2.jpg',
                'price' => 1299.00,
                'cat_id' => 2,
            ],
            [
                'id' => 4,
                'name' => 'Dell XPS 13',
                'content' => 'Laptop Dell XPS 13 với màn hình 13.4 inch, Intel Core i7',
                'img' => 'dell_xps_13.jpg',
                'price' => 1399.00,
                'cat_id' => 2,
            ],
            [
                'id' => 5,
                'name' => 'iPad Pro 11',
                'content' => 'Máy tính bảng iPad Pro 11 inch, chip M2, màn hình Liquid Retina',
                'img' => 'ipad_pro_11.jpg',
                'price' => 799.00,
                'cat_id' => 3,
            ],
            [
                'id' => 6,
                'name' => 'Samsung Galaxy Tab S8',
                'content' => 'Máy tính bảng Samsung Galaxy Tab S8, màn hình 11 inch, Snapdragon 8 Gen 1',
                'img' => 'galaxy_tab_s8.jpg',
                'price' => 749.99,
                'cat_id' => 3,
            ],
            [
                'id' => 7,
                'name' => 'Apple Watch Series 8',
                'content' => 'Đồng hồ thông minh Apple Watch Series 8 với màn hình luôn sáng, cảm biến đo oxy trong máu',
                'img' => 'apple_watch_8.jpg',
                'price' => 399.00,
                'cat_id' => 4,
            ],
            [
                'id' => 8,
                'name' => 'Samsung Galaxy Watch 6',
                'content' => 'Đồng hồ thông minh Samsung Galaxy Watch 6, theo dõi sức khỏe, GPS',
                'img' => 'galaxy_watch_6.jpg',
                'price' => 329.99,
                'cat_id' => 4,
            ],
            [
                'id' => 9,
                'name' => 'OnePlus 11',
                'content' => 'Điện thoại OnePlus 11, màn hình 6.7 inch, Snapdragon 8 Gen 2',
                'img' => 'oneplus_11.jpg',
                'price' => 749.00,
                'cat_id' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'content' => 'Laptop Lenovo ThinkPad X1 Carbon, màn hình 14 inch, Intel Core i7',
                'img' => 'thinkpad_x1.jpg',
                'price' => 1599.00,
                'cat_id' => 2,
            ]
        ];
        $dbProducts = DB::table('products')->get()->toArray(); // Convert Collection to array

        // Kết hợp mảng sản phẩm tĩnh với sản phẩm từ cơ sở dữ liệu
        

        // Trả về view với dữ liệu sản phẩm
        return view('layouts.user.products.index', ['products' => $dbProducts]);
    }

    public function addProduct()
    {
        DB::table('products')->insert([
            'name' => 'OnePlus 17',
            'content' => 'Điện thoại OnePlus 11, màn hình 10 inch, Snapdragon 8 Gen 4',
            'img' => 'oneplus_11.jpg',
            'price' => 949.00,
            'cat_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->route('products')->with('success', 'Product added successfully');
    }
}

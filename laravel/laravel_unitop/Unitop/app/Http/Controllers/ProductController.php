<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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

        $products = Product::all();
        return view('layouts.user.products.index', ['products' => $products]);
    }

    public function addProduct()
    {
        $products = Product::create([
            'name' => 'Product 1',
            'price' => 100,
            'content' => 'Product 1 content',
            'image' => 'Product 1 image',
            'cat_id' => '1',
            'status' => 'Product 1 status',
            'created_at' => now(),
        ]);
        $products = Product::all();

        return redirect('/products')->with('success', 'Product created successfully');
    }

}

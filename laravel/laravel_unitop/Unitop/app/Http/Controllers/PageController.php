<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'Laptop',
            'Phone',
            'Tablet'
        ];
        return view('layouts.user.products.index', ['products' => $products]);
    }
}

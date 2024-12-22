<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function test()
    {
        $test = route('post.store');
        echo $test;
    }
    public function string()
    {
        $str = "    Huynh Thi   Cam Tu  ";
        echo "td: " . strlen($str) . "<br>";
        echo "td: " . strtolower($str) . "<br>";
        echo "td: " . strtoupper($str) . "<br>";
        // $randomString = Str::random(10);
        // loai bo khoang trắng
        // echo "td:" . Str::of($str)->trim() . "<br>";

        // tao slug làm link than thien
        // ->ket qua: td:hoc-web-di-lam
        // $string = Str::slug("Hoc web di làm");
        // echo "td:" . $string . "<br>";

        // 6.lay chuoi con
        // $str = "Laravel 1234";
        // echo Str::of($str)->substr(0, 5);

        // 7. nối chuỗi phía sau
        // echo Str::of('DangQuocThanh')->append('@gmail.com');

        // 8.Thay the 
        // echo Str::of('laravel 10x')->replace('10x', '11x');

        // 9. chuyen chuoi thanh mang
        $str2 = "Dang quoc thanh dang hoc laravel chuan bi di lam" . "<br>";
        echo Str::contains($str2, 'php                                                                                                                                                                                                                                                        ');


    }
    public function search()
    {
        return view('layouts.user.string.index');
    }
}

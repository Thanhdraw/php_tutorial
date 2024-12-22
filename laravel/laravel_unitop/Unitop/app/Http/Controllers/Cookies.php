<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cookies extends Controller
{
    //
    public function setCookie()
    {
        $cookie = cookie('name', 'Dang Quoc Thanh', 60);
        return response('Cookie has been set.')->cookie($cookie);

    }
    public function getCookie(Request $request)
    {
        // Lấy cookie qua request
        $userName = $request->cookie('name');

        // Hoặc dùng Cookie facade
        // $userName = Cookie::get('user_name');

        return 'Cookie value: ' . ($userName ?? 'Not found');
    }

}

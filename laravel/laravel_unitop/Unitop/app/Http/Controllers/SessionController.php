<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function add(Request $request)
    {
        $request->session()->put('name', 'Dang Quoc Thanh');
        $request->session()->put('name', 'Huynh Thị Cẩm Tú');

        return redirect()->route('session.show');
    }

    public function admin_add(Request $request)
    {
        $request->session()->put(
            [
                'admin_name' => 'Dang Quoc Thanh',
                'admin_2_name' => 'Huynh Thị Cam Tú',
            ],

        );
        $adminName = $request->session()->get('admin_name');

        return redirect()->route('session.admin.show')->with('status', 'Chao mung ban ' . $adminName);

    }

    public function show_admin(Request $request)
    {
        $info = $request->session()->all();

        $status = $request->session()->get('status');

        return view('layouts.admin.auth.login', compact('info'))->with('status', $status);
    }
    public function show(Request $request)
    {

        $info = $request->session()->all();

        $status = $request->session()->get('status');

        return view('layouts.user.session.index', compact('info'))->with('status', $status);
    }



    public function destroy(Request $request)
    {

        // Xoa session
        $request->session()->forget('name');
        $request->session()->flush();

        return redirect()->route('session.show')->with('status', 'Ban da xoa thanh cong');
    }



}

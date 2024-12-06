<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('layouts.user.auth.login');
    }
    public function register()
    {
        return view('layouts.user.auth.regis');
    }
    public function regis(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if ($user) {
            return redirect()->route('register')->with('success', 'Registration successful!');
        }

        return redirect()->route('register')->with('success', 'Registration Failed!');
    }

    public function log(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Đăng nhập thành công
            return redirect()->route('products')->with('success', 'Login successful!');
        } else {
            // Đăng nhập thất bại
            return back()->withErrors(['email' => 'These credentials do not match our records.']);
        }


    }



}

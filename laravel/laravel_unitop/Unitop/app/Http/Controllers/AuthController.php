<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;

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
            return $this->check_role(); // Trả về kết quả từ check_role
        } else {
            // Đăng nhập thất bại
            return back()->withErrors(['email' => 'These credentials do not match our records.']);
        }
    }

    public function check_role()
    {
        $user = Auth::user();
        if (
            $user->roles->contains(function ($role) {
                return $role->id == 1 || $role->name == 'admin';
            })
        ) {
            return redirect()->route('admin');
        } else {
            return redirect()->route('home');
        }


    }


    public function phanquyen()
    {
        // Lấy tất cả roles của user với id = 4
        $userRoles = User::find(4)->roles;

        // Chuyển đổi dữ liệu sang mảng chỉ lấy user_id và role_id
        $result = $userRoles->map(function ($role) {
            return [
                'user_id' => $role->pivot->user_id, // Lấy từ bảng trung gian
                'role_id' => $role->id,            // Lấy id của role
            ];

        });

        echo 'khong phai admin';
        // In ra kết quả
        echo '<pre>';
        print_r($result->toArray());
        echo '</pre>';
    }



}

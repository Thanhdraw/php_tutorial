<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QBCOntroller extends Controller
{
    //
    public function index()
    {
        $users = DB::table('users')->where('id', 4)->count();
        echo '<pre>';
        print_r($users);
        echo '</pre>';
    }

    public function add()
    {
        $add = DB::table('users')->insert([
            'name' => 'Nguyen Van A',
            'email' => 'a@b.com',
            'password' => bcrypt('123456'),
            'created_at' => now(),
        ]);
        if ($add) {
            echo 'Them thanh cong';
        } else {
            echo 'Them that bai';
        }
    }
    public function findbyid($id)
    {
        $user = DB::table('users')->find($id);
        if (!$user) {
            echo 'Khong tim thay user';
        }
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
    public function join()
    {
        $user = DB::table('users')
            ->join('roles', 'users.id', '=', 'roles.id')
            ->select('users.*', 'roles.*')
            ->get();
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
    public function groupby()
    {
        $user = DB::table('users')
            ->selectRaw('COUNT(id) as total')
            ->get();

        echo '<pre>';
        echo "  
            ->DB::table('users')
            ->selectRaw('COUNT(id) as total')
            ->get();";
        print_r($user);
        echo '</pre>';

    }
    public function orderBy()
    {
        // $user = DB::table('users')
        //     ->orderBy('name')
        //     ->get();


        $user = DB::table('users')
            ->offset(2)
            ->limit(2)
            ->get();
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
    public function update($id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => 'KieuVanDoan'
            ]);
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
    // public function delete($id)
    // {
    //     $user = DB::table('users')
    //         ->where('id', $id)
    //         ->delete();
    //     echo '<pre>';
    //     print_r($user);
    //     echo '</pre>';
    // }

    public function show()
    {
        $products = DB::table('products')->get();
        return $products;
    }
    public function create()
    {
        $products = DB::table('products')->insert([
            'name' => 'Laptop',
            'content' => 'Laptop Apple 2020',
            'img' => 'Laptop.jpg',
            'price' => 2000,
            'cat_id' => 2,
            'created_at' => now(),
        ]);
        if ($products) {
            echo 'Them thanh cong';
        } else {
            echo 'Them that bai';
        }
    }
    public function updateQB($id)
    {
        $products = DB::table('products')->where('id', $id)->update([
            'name' => 'Laptop Apple 2021',
            'content' => 'Laptop Apple 2021',
        ]);
        if ($products) {
            echo 'Them thanh cong';
        } else {
            echo 'Them that bai';
        }
    }
    public function deleteQB($id)
    {
        $products = DB::table('products')->where('id', $id)->delete();
        if ($products) {
            echo 'xoa thanh cong';
        } else {
            echo 'xoa that bai';
        }
    }
}

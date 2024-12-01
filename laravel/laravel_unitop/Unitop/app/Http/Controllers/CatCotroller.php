<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CatCotroller extends Controller
{
    //
    public function index()
    {;
    }
    public function dumpData()
    {
        $cat = Category::all();
        return view('layouts.user.category.index')->with('cat', $cat);
    }
    public function findbyid($id) {
        try {
            $itembyID = Category::find($id);
            return view('layouts.user.category.edit')->with('itembyID', $itembyID);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

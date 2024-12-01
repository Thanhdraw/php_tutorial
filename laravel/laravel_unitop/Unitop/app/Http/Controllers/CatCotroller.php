<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CatCotroller extends Controller
{
    //
    public function index()
    {
        ;
    }
    public function dumpData()
    {
        $cat = Category::all();
        return view('layouts.user.category.index')->with('cat', $cat);
    }
    public function findbyid($id)
    {
        try {
            $itembyID = Category::find($id);
            return view('layouts.user.category.edit')->with('itembyID', $itembyID);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
            ]);
            // cach 1
            $cat = Category::find($id);
            $cat->name = $request->name;
            $cat->save();
            return redirect()->route('category.index')->with('success', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            throw $th;
        }

    }
    public function delete($id)
    {
        try {
            $cat = Category::find($id);
            $cat->delete();
            return redirect()->route('category.index')->with('success', 'Xóa thành công');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function trashed()
    {
        $categories = Category::withTrashed()->get(); // Đổi $cat thành $categories

        // Kiểm tra xem có dữ liệu không
        if ($categories->isEmpty()) {
            return redirect()->route('category.index')->with('error', 'No trashed categories found.');
        }

        return view('layout.user.category.trashed', compact('categories')); // Truyền đúng biến
    }


    public function restore($id)
    {
        try {
            $cat = Category::withTrashed()->find($id);
            if (!$cat) {
                return redirect()->route('category.index')->with('error', 'Danh mục không tồn tại hoặc chưa bị xóa.');
            }

            $cat->restore();
            return redirect()->route('category.index')->with('success', 'Khôi phục thành công.');
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('error', 'Có lỗi xảy ra khi khôi phục: ' . $th->getMessage());
        }
    }

}

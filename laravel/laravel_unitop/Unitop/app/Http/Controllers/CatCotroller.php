<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use Illuminate\Http\Request;

class CatCotroller extends Controller
{
    //
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
        // Lấy dữ liệu bị xóa mềm
        $categories = Category::onlyTrashed()->get();

        // Ghi log dữ liệu để kiểm tra
        Log::info('Categories: ' . $categories->toJson());

        // Kiểm tra nếu không có dữ liệu


        // Trả về view với dữ liệu
        return view('layouts.user.category.trashed', compact('categories'));
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


    public function forceDelete($id)
    {
        try {
            $cat = Category::withTrashed()->find($id);
            if (!$cat) {
                return redirect()->route('category.index')->with('error', 'Danh mục không tồn tại hoặc chưa bị xóa.');
            }
            $cat->forceDelete();
            return redirect()->route('category.index')->with('success', 'Xóa thành cong');
        } catch (\Throwable $th) {
            return redirect()->route('category.index')->with('error', 'Có lỗi xảy ra khi xóa: ' . $th->getMessage());
        }
    }

    public function addCategory()
    {
        return view('layouts.user.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        // $cat = new Category();
        // $cat->name = $request->name;
        // $cat->save();
        Category::create([
            'name' => $request->name
        ]);

        return redirect()->route('category.create')->with('success', 'Them thanh cong');
    }


}

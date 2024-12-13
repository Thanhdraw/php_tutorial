<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();

        return view('layouts.user.form.post', compact('posts'));
    }
    public function reg()
    {
        return view('layouts.user.form.reg');
    }
    public function handleJson(Request $request)
    {
        $data = $request->all();

        // Xử lý dữ liệu nếu cần, như lưu vào cơ sở dữ liệu

        // Trả về phản hồi dạng JSON
        return response()->json([
            'success' => true,
            'message' => 'Dữ liệu đã được gửi thành công',
            'data' => $data
        ]);

    }

    public function store(Request $request)
    {

        $request->validate([
            'file_input' => 'required|mimes:jpg,png,jpeg,gif|max:2048',
            'title' => 'string',
            'content' => 'string',
        ]);
        $file = $request->file('file_input');
        $filepath = 'uploads/' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $file->getClientOriginalName());

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $filepath,
        ]);


        return redirect()->route('form.index')
            ->with('success', value: 'Bài viết đa được tạo.');



    }
}

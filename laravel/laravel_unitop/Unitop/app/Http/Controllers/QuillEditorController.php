<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuillEditorController extends Controller
{
    //
    public function store(Request $request)
    {
        try {
            $content = $request->input('content');
            return response()->json(['success' => true, 'content' => $content]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

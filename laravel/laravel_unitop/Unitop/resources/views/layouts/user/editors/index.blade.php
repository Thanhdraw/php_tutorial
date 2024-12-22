@extends('layouts.user.master')

@section('content')
<h1>Quill Editor</h1>
<div id="editor-container" style="height: 300px;"></div>
<form action="#" method="POST">
    @csrf
    <input type="hidden" name="content" id="content">
    <button type="submit" onclick="" class="mt-3 btn btn-primary bg-slate-600 border-spacing-1">Lưu nội dung</button>
</form>

<div class="mt-3 bg-slate-300">
    <h1>Quill Editor</h1>
    <h2>Lấy dự liệu</h2>
    <Strong>Lấy dự liệu:</Strong>
    <label for="content"></label>
    <div class="getdata"> </div>



</div>



<script src="{{assert('js/quill.js')}}"></script>



@endsection
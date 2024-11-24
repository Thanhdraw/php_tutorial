@extends('layouts.user.master')

@section('title', 'Products List | E-Commerce')

@section('content')

<h1>Products List</h1>
<!-- Nội dung danh sách sản phẩm ở đây -->


<ul>
    @if (isset($products))
        @for ($i = 0; $i <= count($products) - 1; $i++)
            <li>{{$i + 1}} - {{$products[$i]}}</li>
        @endfor
    @endif
</ul>
@endsection
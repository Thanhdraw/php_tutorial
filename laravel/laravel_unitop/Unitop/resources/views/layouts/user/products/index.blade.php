@extends('layouts.user.master')

@section('title', 'Products List | E-Commerce')

@section('content')

    <h1>Products List</h1>
    <!-- Nội dung danh sách sản phẩm ở đây -->
    <a class="font-bold text-xl blue" href="/add-product"> tao san pham</a>

    <ul class="space-y-6">
        @if (isset($products))
            @foreach ($products as $product)
                <li class="p-4 bg-white rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-900">{{ $product->id }}</h3>
                    <h3 class="text-xl font-semibold text-gray-900">{{ $product->name }}</h3>
                    <p class="text-gray-700">{{ $product->content }}</p>
                    <p class="text-lg font-semibold text-green-500">Price: ${{ $product->price }}</p>
                </li>
            @endforeach
        @endif
    </ul>
    @if (isset($success))
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif

@endsection

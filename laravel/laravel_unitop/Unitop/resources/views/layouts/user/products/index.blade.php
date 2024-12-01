@extends('layouts.user.master')

@section('title', 'Products List | E-Commerce')

@section('content')
<div class="container px-4 py-8 mx-auto">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Products List</h1>
        <a href="/add-product" onclick="return confirm('Are you sure you want to create a new product?')"
            class="inline-block px-4 py-2 text-white transition-colors bg-blue-600 rounded-lg hover:bg-blue-700">
            Create New Product
        </a>
    </div>

    @if (session('success'))
        <div class="relative px-4 py-3 mb-4 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (isset($products))
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 ">
            @foreach ($products as $product)
                <div
                    class="overflow-hidden transition-all duration-300 transform bg-white shadow-lg rounded-xl hover:scale-105 hover:shadow-xl">

                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm text-gray-500">ID: {{ $product->id }}</span>
                            <span class="text-lg font-bold text-green-600">${{ number_format($product->price, 2) }}</span>
                        </div>

                        <h2 class="mb-2 text-xl font-semibold text-gray-800">{{ $product->name }}</h2>

                        <p class="mb-4 text-gray-600">{{ Str::limit($product->content, 100) }}</p>

                        <div class="flex space-x-4">
                            <a href="#" class="px-3 py-2 text-white transition-colors bg-blue-500 rounded-md hover:bg-blue-600">
                                Edit
                            </a>
                            <a href="#"
                                class="px-3 py-2 text-white transition-colors bg-green-500 rounded-md hover:bg-green-600">
                                View
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

    @else
        <div class="p-6 text-center bg-gray-100 rounded-lg">
            <p class="text-gray-600">No products found.</p>
        </div>
    @endif
</div>
@endsection
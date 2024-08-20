@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 h-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($myArray as $item)
                <div
                        class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300 ease-in-out">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $item['name'] }}</h2>
                            <span
                                    class="px-2 py-1 text-xs font-semibold rounded-full {{ $item['is_new'] ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                            {{ $item['is_new'] ? 'New' : 'Used' }}
                        </span>
                        </div>
                        <p class="text-gray-600 text-sm mb-2">ID: {{ $item['id'] }}</p>
                        <p class="text-2xl font-bold text-indigo-600 mb-2">${{ $item['price'] }}</p>
                        <p class="text-gray-500 text-sm">{{ $item['description'] }}</p>
                    </div>
                    <div class="px-5 py-3 bg-gray-50 border-t border-gray-100">
                        <!-- Blade template -->
                        <!-- Nếu $product là mảng -->
                        <a href="{{ route('products/{id}', ['id' => $item['id']]) }}">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection




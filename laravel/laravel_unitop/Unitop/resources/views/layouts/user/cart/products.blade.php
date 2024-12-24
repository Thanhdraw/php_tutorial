@extends('layouts.user.master')



@section('content')

<body class="bg-gray-100">

    <div class="container px-4 py-8 mx-auto">
        <a href="/cart">
            <button class="float-right px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                <i class="fa-solid fa-cart-shopping">
                </i>
                Giỏ hàng
            </button>
        </a>

        <!-- Tiêu đề -->
        <h1 class="mb-6 text-3xl font-bold text-gray-800">{{$title}}</h1>

        <!-- Grid sản phẩm -->
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <!-- Sản phẩm 1 -->
            @if (!empty($products))
                @foreach ($products as $item)
                    <div class="overflow-hidden bg-white rounded-lg shadow-md">
                        <a href="#">
                            <img src="{{$item->img}}" alt="Sản phẩm 1" class="object-cover w-48 mx-auto h-50" /></a>

                        <div class="p-4">
                            <h2 class="mb-2 text-xl font-semibold text-gray-800">{{$item->name}}</h2>
                            <p class="mb-2 text-gray-600">{{$item->content}}</p>
                            <div class="flex items-center justify-between">
                                <span
                                    class="text-lg font-bold text-blue-600">{{number_format($item->price, 2, ',', '.')}}</span>
                                <a href="{{route('addCart', $item->id)}}">
                                    <button class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
                                        Mua ngay
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">
                    <h2 class="text-2xl font-semibold text-gray-800">Kho nguoi dung khong co san pham nao</h2>
                </div>

            @endif

        </div>
        <div class="float-right mt-4">
            {{$products->links() ?? ''}}
        </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
    integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
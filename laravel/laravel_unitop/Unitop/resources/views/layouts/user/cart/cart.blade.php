@extends('layouts.user.master')

@section('content')

<div id="header" class="mt-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="py-2 text-white col-md-4 text-bold">
            </div>
            <div class="col-md-8">
                <a href="cart.html" class="float-right py-2 d-block text-danger">Sản phẩm<span
                        class="text-success">({{Cart::count()}})</span></a>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<div id="wp-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Giỏ hàng</h1>
                <div class="mb-3 text-left">
                    <a href="{{route('cart.products')}}">
                        Quay về giỏ hàng
                    </a>
                </div>
                <div id="message mb-3">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <form action="{{route('cart.update')}}" method="POST">
                    @csrf
                    @csrf
                    @method('PUT')
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                                <th scope="col">Tác vụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Cart::count() > 0)
                                @foreach(Cart::content() as $item)
                                    <tr class="cart-item item-center">
                                        <td scope="row">1</td>
                                        <td>
                                            <img src="{{$item->options->img}}" width="100px" alt="">
                                        </td>
                                        <td scope="col"><a href="">{{$item->name}}</a></td>
                                        <td scope="col">{{number_format($item->price, 0, ',', '.')}}</td>
                                        <td scope="col">
                                            <input type="number" style="width:50px; text-align: center" name="qty[{{$item->rowId}}]"
                                                value="{{$item->qty}}">
                                        </td>
                                        <td scope="col">{{number_format($item->total, 0, ',', '.')}} VND</td>
                                        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')"
                                                href="{{ route('cart.destroy', $item->rowId) }}" class="text-danger">
                                                Xóa
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7"></td>
                                    <h3 class="text-center text-danger">Giỏ hàng trống</h3>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan='6' class="text-right">Tổng:</td>
                                <td><strong>{{Cart::total()}} VNĐ</strong></td>
                            </tr>

                        </tfoot>

                    </table>
                    <input class="w-40 btn btn-primary" name="btnUpdate" type="submit" value="Cập nhật giỏ hàng" >
                </form>
            </div>

        </div>
    </div>
</div>
<!-- end wp-content -->



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<script>
    const message = document.querySelector('#message');
    if (message) {
        setTimeout(() => {
            message.style.display = 'none';
        }, 3000);
    }
</script>
@endsection
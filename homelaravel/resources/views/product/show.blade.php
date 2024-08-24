@extends('layouts.shop')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Shop</h1>



        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-3">

                    <div class="product-card">
                        <img src="{{ asset($product->thumbnail) }}" alt="Product 1">
                        <a href="">{{$product->name}}</a>
                    <p>
                        <span class="price">{{number_format($product->price,0,'','.')}}</span>
                        <span class="old-price">800.000đ</span>
                    </p>
                        <a href="{{route('cart.add', $product->id)}}"><button class="btn btn-danger">Thêm vào giỏ hàng</button></a>
                </div>

            </div>
            @endforeach
        </div>

</div>

@endsection

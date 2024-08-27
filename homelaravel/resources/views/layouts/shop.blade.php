
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <div id="wraper">
        <div id="header" class="bg-dark mb-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 texxt-white text-bold py-2">
                        <a href="{{url('/')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpHUPklZgP5yoT7NPck4lF_zF39qvGCKIxFg&s" height="26px" alt=""></a>
                    </div>
                    <div class="col-md-8 ">
                        <a href="{{url('cart/show')}}" class="py-2 d-block float-right text-danger">Giỏ Hàng({{Cart::count()}})</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end headeer --}}
    <div id="wp-content">
        @yield('content')
    </div>
    {{-- end content --}}
    <div id="footer" class="bg-secondary text-center text-warning mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Xuantruong.VN
                </div>
            </div>
        </div>
    </div>
    {{-- end footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;

use Illuminate\Support\Str;

class HelperController extends Controller
{
    //
    function url()
    {
        // 1.Tạo url cơ bản

        // $url = url('login');

        // echo $url;

        //Tạo url qua route

        $url = route('post.show');

        echo $url;

        //Tạo URL theo Action

        $url = action('PostController@store');

        echo $url;


        //4. lấy Current url

        // $url = url()->current();

        // echo $url;

    }

    function string(){
        //1. Lấy độ dài chuỗi
        $str_1 = "Trường";
        echo Str::length($str_1);


        //2. In thường một chuỗi

        $str = "Trương Xuân Trường";

        echo Str::lower($str);

        echo Str::upper($str);


        //3. Radom string

        echo Str::random(30);

        //4. Loại bỏ ký tự dư thừa

        $str = Str::of('    Xuan Truong    abccc    ')->trim();

        echo $str;

        //5. Tạo slug
        // Xuantruong.vn Học web => xuantruong.vn-hoc-web

        $str = Str::slug('Xuantruong.vn Học web');

        echo $str;

        //6. Lấy chuỗi con

        $str = "Xuân Trường";

        // echo Str::of($str)->substr(8);

        echo Str::of($str)->substr(0, 7);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    function add(Request $request){
        $request->session()->put('username','xuantruong');
        $request->session()->put('login', true);


        session(['username'=>'xuantruong']);
    }
    function show(Request $request){
        // return $request->session()->all();


        // if($request->session()->has('username')){
        //     echo "Đã lưu username vào session";
        // }
        // return $request->session()->get('xuantruong');

        // return $request->session()->get('status');

        return session('username');
    }
    function add_flash(Request $request) {
        Session::flash('status', 'Bạn đã thêm sản phẩm thành công!');
    }
    function delete(Request $request){
        // $request->session()->forget('username');

        $request->session()->flush();
    }
}


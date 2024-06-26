<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($id){
        // return "Thông tin sản phẩm id: ".$id;

        $price = 400000;

        $colors = ['red','blue'];
        return view('product.show', compact('id','price','colors'));
    }
    function create(){
        return "Thêm sản phẩm mới";
    }
    function update($id){
        return "Update sản phẩm có id: ".$id;
    }
}

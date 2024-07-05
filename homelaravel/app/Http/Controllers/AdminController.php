<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function add(){
        DB::table('product')->insert(
            [
                'name' => 'Iphone 7',
                'content' => 'Nội dung mô tả sản phẩm iphone 7',
                'price' => '8000000',
                'user_id' => '1',
                'product_cat_id' => 1
            ]
        );
    }
    function update($id){
        DB::table('product')
        ->where('id',$id)
        ->update(
            [
                'price' => '40000000'
            ]
        );
    }
    function show(){
        $product = DB::table('product')
        ->select('name')
        ->get();
        return $product;

    }
    function delete($id){
        DB::table('product')
        ->where('id',$id)
        ->delete();
    }
}

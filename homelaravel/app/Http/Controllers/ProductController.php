<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){
        $products = Product::all();

        // return $product;

        return view('product.show',compact('products'));
    }


}

<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //
    function show()
    {
        return view('cart.show');
    }
    function add(Request $request,$id)
    {
        // Cart::add('293ad', "Product {$id}", 1, 9.99);

        // echo "<pre>";
        // print_r(Cart::content());
        // echo "</pre>";

        $product = Product::find($id);
        // return $product;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            // 'options' => ['size' => 'large']
        ]);

        return redirect('cart/show');
    }
}

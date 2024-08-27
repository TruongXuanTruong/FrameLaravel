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

        // Cart::destroy();

        $product = Product::find($id);
        // return $product;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' =>$product->thumbnail]
        ]);

        return redirect('cart/show');
    }
    function remove($rowID){
        Cart::remove($rowID);

        return redirect('cart/show');
    }
    function destroy(){
        Cart::destroy();
        return redirect('cart/show');
    }
    function update(Request $request){
        $quantities = $request->input('qty');

        foreach ($quantities as $rowId => $quantity) {
            Cart::update($rowId, $quantity);
        }

        return redirect('cart/show');
    }
}

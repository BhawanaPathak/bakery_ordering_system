<?php

namespace App\Http\Controllers;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
        public function addCart($id=null){
            $product = \App\Models\Product::find($id);
            Cart::add($product->id,$product->name,1,$product->price)->associate('App\Models\Product');
           return back();
        }
        public function readCart(){
            $carts = Cart::content();
            return view('cart.index',compact('carts'));
        }
}

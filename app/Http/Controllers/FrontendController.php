<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    function index()
    {
        $products = Product::where('status', 1)->orderby('created_at', 'desc')->limit(4)->get();
        return view('frontend.master', compact('products'));
    }
    function  category($id){
        $category_products = Product::where('category_id',$id)->get();
        $id_=$id;
        return view('frontend.front.category',compact('category_products'));
    }

    function shop()
    {
        $products = Product::where('status', 1)->orderby('created_at', 'desc')->limit(10)->get();
        return view('frontend.front.shop', compact('products'));

    }
}

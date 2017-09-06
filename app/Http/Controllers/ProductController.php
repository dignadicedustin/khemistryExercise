<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $products = Product::all();
        return view('products/products', ['products' => $products]);
    }
    public function getProduct($id){
        $product = Product::find($id);
        return view('products/product_details', ['product' => $product]);
    }
}

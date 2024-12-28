<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
     public function index()
   {
     $product = Product::all();
     return view('index', ['products' => $product]);
   }
   public function add(){
        return view('add');
    }
    
    public function register(ProductRequest $request)
    {
        $product = $request->only(['item','product', 'register','search']);
        return view('product', compact('product'));
    }

    public function store(ProductRequest $request)
    {
        
        $product = $request->only(['item','product', 'register','search']);
        Product::create($product);
        return view('thanks');
    }
    
    public function update(ProductRequest $request)
    {
        $product = $request->only(['item','product', 'register','search']);
        Product::find($request->id)->update($product);
        $products = Product::all();
        return view('product', compact('products'));
    }
    public function delete(Request $request)
    {
        Product::find($request->id)->delete();
        $products = Product::all();
        return view('product', compact('products'));
    }
    

    
    
}

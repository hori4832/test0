<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
     public function index()
    {
        $product = Product::all('/Users/Downloads/fruits-img/banana.png',
    '/Users/Downloads/fruits-img/grapes.png',
    '/Users/Downloads/fruits-img/kiwi.png',
    '/Users/Downloads/fruits-img/melon.png',
    '/Users/Downloads/fruits-img/muscat.png',
    '/Users/Downloads/fruits-img/orange.png',
    '/Users/Downloads/fruits-img/peach.png',
    '/Users/Downloads/fruits-img/pineapple.png',
    '/Users/Downloads/fruits-img/strawberry.png',
    '/Users/Downloads/fruits-img/watermelon.png');
        return view('index', ['products' => $product]);
    }
         
}

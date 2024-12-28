<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index']);
Route::POST('/product', [ProductController::class, 'product_id']);
Route::get('/product', [ProductController::class, 'product']);
Route::get('/register', [ProductController::class, 'register']);
Route::post('/delete', [ProductController::class, 'delete']);
Route::post('/update', [ProductController::class, 'update']);
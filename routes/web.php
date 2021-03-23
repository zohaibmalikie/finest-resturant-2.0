<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Welcome');
});
Route::view('index','home-shop');
Route::view('contact','contact');
Route::view('about','about');
Route::view('menu','menu-grid-2');
Route::view('cart','product-cart');
Route::view('checkout','product-checkout');
Route::view('single-product','product-single');
Route::view('reservation','reservation');
Route::view('404', 'page-404');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::fallback(function () {
    return redirect('/404');
});
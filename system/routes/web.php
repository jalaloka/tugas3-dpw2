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
    return view('frontview.home');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('product', function () {
    return view('frontview.product');
});

Route::get('productdetail', function () {
    return view('frontview.productdetail');
});

Route::get('cart', function () {
    return view('frontview.cart');
});

Route::get('login', function () {
    return view('login.login');
});

Route::get('beranda', function () {
    return view('backview.beranda');
});

Route::get('kategori', function () {
    return view('backview.kategori');
});

Route::get('produk', function () {
    return view('backview.produk');
});

Route::get('user', function () {
    return view('backview.user');
});
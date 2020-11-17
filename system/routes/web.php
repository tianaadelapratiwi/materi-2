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
	return view('home');
});

Route::get('home', function () {
	return view('home');
});

Route::get('/about', function () {
	return view('about');
});
Route::get('/contact', function () {
	return view('contact');
});
Route::get('/about', function () {
	return view('about');
});

Route::get('/checkout', function () {
	return view('checkout');
});
Route::get('/login', function () {
	return view('login');
});
Route::get('/masuk', function () {
	return view('masuk');
});
Route::get('/product', function () {
	return view('product');
});
Route::get('/store', function () {
	return view('store');
});


Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('admin/login', [AuthController::class, 'showlogin']);

Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/edit/{produk}', [ProdukController::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukController::class, 'update']);


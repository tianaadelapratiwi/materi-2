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


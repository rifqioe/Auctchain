<?php

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

//Halaman Utama
Route::get('/', function () {
    return view('landing-page');
})->name('landingPage');

//Halaman List Produk
Route::get('sellroom/product', function () {
	return view('sellroom/sellroom');
 })->name('sellroom');

//Halaman detail produk
Route::get('sellroom/product/detail/{prod}',function($prod){
	return view('sellroom/product',['prodID' => $prod]);
})->name('product');

//Halaman register akun
Route::get('sellroom/account/register',function(){
	return view('sellroom/register');
})->name('registerUser');

//Halaman register barang
Route::get('sellroom/product/register',function(){
	return view('sellroom/register-item');
})->name('registerItem');

//Halaman detail akun
Route::get('sellroom/account/',function(){
	return view('sellroom/account');
})->name('account');

//Halaman bid setiap item
Route::get('sellroom/product/detail/{prod}/bid',function($prod){
	return view('sellroom/bid',['prodID' => $prod]);
})->name('bid');

//Halaman about
Route::get('about', function () {
	return view('about-us');
 })->name('aboutUs');

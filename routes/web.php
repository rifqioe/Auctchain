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

Route::get('/', function () {
    return view('landing-page');
})->name('landingPage');

Route::get('sellroom', function () {
	return view('sellroom/sellroom');
 })->name('sellroom');

Route::get('sellroom/product/{prod}',function($prod){
	return view('sellroom/product',['prodID' => $prod]);
})->name('product');

Route::get('sellroom/account/register',function(){
	return view('sellroom/register');
})->name('registerUser');

Route::get('sellroom/item/register',function(){
	return view('sellroom/register-item');
})->name('registerItem');

Route::get('sellroom/account/',function(){
	return view('sellroom/account');
})->name('account');

Route::get('sellroom/product/{prod}/bid',function($prod){
	return view('sellroom/bid',['prodID' => $prod]);
})->name('bid');

Route::get('about', function () {
	return view('about-us');
 })->name('aboutUs');

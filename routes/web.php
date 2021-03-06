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
    return view('homepage');
});


Route::get('/ip_check', 'FrontendController@ip_check')->name("ip_check");

Route::get('/rings', 'RouteDataController@fetchrings')->name("rings");

Route::get('/product', 'RouteDataController@fetchproduct')->name("product");

Route::get('/product1', 'RouteDataController@fetchproduct1')->name("product1");


Route::get('/imagemap', function () {
    return view('image-map');
});

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

Route::any('products/search', 'ProductController@search')->name('products.search')->middleware('auth');
Route::resource('products', 'ProductController')/*->middleware(['auth', 'check.is.admin'])*/;

Route::get('/', function () {
    return view('welcome');
});

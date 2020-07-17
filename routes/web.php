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

Route::get('/', function () {  //接收到使用者從url=跟目錄的要求，回應index這個頁面，將這個route命名為home
    return view('index');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');
 
Route::get('products', function () {
    return view('products');
})->name('products');

Route::get('store', function () {
    return view('store');
})->name('store');

Route::get('test', function () {
    return view('test');
});
Route::get('insert', function () {
    return view('insert');
});
// GET product的要求轉發給ProductController的index方法處理
Route::get('product', 'ProductController@index');
// GET product{id}的要求轉發給ProductController的show方法處理，同時會傳遞參數id
Route::get('product/{id}', 'ProductController@show');
// POST product的要求轉發給ProductController的store方法處理
Route::post('product', 'ProductController@store');
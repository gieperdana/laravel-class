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

// Route::get('/', function () {
//     return view('app');
// })->name('home');

// App Router

// Home
Route::get('/', 'HomeController@index')->name('home');

// Product
Route::get('/product', 'ProductController@index')->name('product');
Route::post('/product/add', 'ProductController@create')->name('product.add');

//Promo
Route::get('/promo', 'PromoController@index')->name('promo');

// Contact
Route::get('/contact', 'ContactController@index')->name('contact');

// Router Produk
Route::get('/produk', 'ProdukController@index');
Route::post('/produk', 'ProdukController@simpan');
Route::put('/produk', 'ProdukController@ubah');
Route::delete('/produk', 'ProdukController@hapus');


// // Router User
// Route::get('/user', 'UserController@index');
// Route::post('/user', 'UserController@simpan');
// Route::put('/user', 'UserController@ubah');
// Route::delete('/user', 'UserController@hapus');

// // Router Katalog
// Route::get('/kategori', 'KategoriController@index');
// Route::post('/kategori','KategoriController@simpan');
// Route::put('/kategori','KategoriController@ubah');
// Route::delete('/kategori','KategoriController@hapus');


// Route::get('/user', 'UserController@index');

Route::resource('photos', 'PhotoController');


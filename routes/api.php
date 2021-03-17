<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Router Produk
Route::get('/produk', 'ProdukController@index');
Route::post('/produk', 'ProdukController@create');
Route::put('/produk/{id}', 'ProdukController@put');
Route::delete('/produk/{id}', 'ProdukController@delete');

// Router Pesanan
Route::get('/pesanan', 'PesananController@index');
Route::post('/pesanan', 'PesananController@create');
Route::put('/pesanan/{id}', 'PesananController@put');
Route::delete('/pesanan/{id}', 'PesananController@delete');

// Route::resource('photos', 'PhotoController');
// Route::get('/anggi/satukan', 'PhotoController@satukanNama');
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
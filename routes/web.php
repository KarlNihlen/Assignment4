<?php
use App\Product;
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
    $products = Product::all();
    $product = $products[count($products) -1];
    return view('start', [
      'product' => $product
    ]);
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/pricerange', function () {
    $products = Product::all();
    $min = $_GET["MinValue"];
    $max = $_GET["MaxValue"];
    return view('pricerange', [
      'products' => $products,
      'min' => $min,
      'max' => $max,

    ]);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/products', 'ProductsController');

Route::resource('/stores', 'StoresController');

Route::resource('/reviews', 'ReviewsController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

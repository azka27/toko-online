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
    return view('welcome');
});
Route::get('/helo', function () {
    return "Hello World";
});
Route::get('/product/display', 'ProductController@showAll');
Route::get('/product/save', 'ProductController@saveNew');
Route::get('/pintu-masuk', 'TestController@pintuMasuk');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/users/{user_id}/comments/{comment_id}', 'UserController@showComment');
Route::get("/products/{product_id?}", "ProductController@show");
Route::get('/products/list', 'ProductController@list');
Route::post('/products/create', 'ProductController@create');
Route::put('/products/{id}', 'ProductController@update');
Route::match(["PUT", "PATCH"], '/product/{id}', 'ProductController@update');
Route::any('/products/{id}', 'ProductController@action');
Route::get('/products/list', 'ProductController@list')->name("products");
Route::group(['prefix'=>'/products'], function() {
	Route::get('/all', 'ProductController@all');
	Route::get('/bag', 'ProductController@bag');
	Route::get('/latest', 'ProductController@latest');
	Route::get('/discounts', 'ProductController@discounts');
});
Route::group(['prefix'=>'admin', 'middleware'=>'mustAdmin'], function() {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/orders', 'DashboardController@index');
});
Route::view('/path', 'nama.view');
Route::get('/show-all-items', 'ItemController@showAllItems');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{id}', 'CategoryController@show');
Route::get('/categories/{id}/edit', 'CategoryController@edit');
Route::put('/categories/{id}', 'CategoryController@update');
Route::delete('categories/{id}', 'CategoryController@destroy');

Route::resource('categories', 'CategoryController');

Route::group(["prefix"=>"latihan"], function() {
	Route::get("/kategori/all", "CategoryController@index");
	Route::get("/kategori/search", "CategoryController@search");
	Route::get("/kategori/{id}/delete", "CategoryController@delete");
	Route::get("/kategori/{id}/restore", "CategoryController@restore");
	Route::get("/kategori/{id}/permanent-delete", "CategoryController@permanentDelete");
});

Route::get("/ucapkan-salam", "SalamController@beriSalam");
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

Route::get('/', 'FrontendController@index')->name('master.index');
Route::get('/shop', 'FrontendController@shop')->name('frontend.front.shop');
Route::get('/category/{id?}', 'FrontendController@category');
Route::get('/about',function (){
    return view('frontend.about');
});

Route::get('/cart/add{id?}', 'CartController@addCart')->name('cart.add');
Route::get('/cart/read', 'CartController@readCart')->name('cart.read');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/backend/')->namespace('Backend')->group(function() {

    Route::get('category', 'CategoryController@index')->name('category.index');
    //insert form
    Route::get('category/create', 'CategoryController@create')->name('category.create');
    //view details of category
    Route::post('category', 'CategoryController@store')->name('category.store');
    //show of category
    Route::get('category/{id}', 'CategoryController@show')->name('category.show');
    //edit of category
    Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
    //update
    Route::put('category/{id}', 'CategoryController@update')->name('category.update');
    //delete of category
    Route::delete('category/{id}', 'CategoryController@destroy')->name('category.destroy');

    Route::get('product', 'ProductController@index')->name('product.index');
    //insert form
    Route::get('product/create', 'ProductController@create')->name('product.create');
    //view details of product
    Route::post('product', 'ProductController@store')->name('product.store');
    //show of product
    Route::get('product/{id}', 'ProductController@show')->name('product.show');
    //edit of product
    Route::get('product/{id}/edit', 'ProductController@edit')->name('product.edit');
    //update
    Route::put('product/{id}', 'ProductController@update')->name('product.update');
    //delete of product
    Route::delete('product/{id}', 'ProductController@destroy')->name('product.destroy');

});

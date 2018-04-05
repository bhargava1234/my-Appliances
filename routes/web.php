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

Route::get('dishwashers', 'ProductController@dishwashers')->name('dishwashers');
Route::get('smallAppliances', 'ProductController@smallAppliances')->name('smallAppliances');
Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
Route::get('/test', 'HomeController@test')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

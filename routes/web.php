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
Route::get('/', 'LandingPageController@index')->name('welcome');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/shop/detail/{id}', 'ShopController@show')->name('shop-detail');
Route::get('/shop/category/{id}', 'ShopController@category')->name('shop-category');
Route::post('/cart/store', 'CartController@store')->name('create-cart');
Route::patch('/cart/{id}', 'CartController@update');
Route::post('/checkout', 'CheckoutController@store')->name('checkout');
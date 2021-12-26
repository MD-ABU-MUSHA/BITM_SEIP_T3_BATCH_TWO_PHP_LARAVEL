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

Route::get('/', [
    'uses'      => 'App\Http\Controllers\MollaController@index',
    'as'        => '/'
]);

Route::get('/about-us', [
    'uses'      => 'App\Http\Controllers\MollaController@about',
    'as'        => 'about'
]);

Route::get('/contact-us', [
    'uses'      => 'App\Http\Controllers\MollaController@contact',
    'as'        => 'contact'
]);


Route::get('/category-product', [
    'uses'      => 'App\Http\Controllers\MollaController@categoryProduct',
    'as'        => 'category-product'
]);

Route::get('/product-detail', [
    'uses'      => 'App\Http\Controllers\MollaController@productDetail',
    'as'        => 'product-detail'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

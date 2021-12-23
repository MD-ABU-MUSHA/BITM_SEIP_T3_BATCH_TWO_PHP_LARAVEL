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

Route::get('/',[
    'uses' => 'App\Http\Controllers\UrdanController@index',
    'as' => '/'
]);


Route::get('/about-us',[
    'uses' => 'App\Http\Controllers\UrdanController@about',
    'as' => 'about-us'
]);


Route::get('/contact-us',[
    'uses' => 'App\Http\Controllers\UrdanController@contact',
    'as' => 'contact-us'
]);




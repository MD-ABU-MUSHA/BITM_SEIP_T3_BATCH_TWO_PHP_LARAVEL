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
    'uses' => 'App\Http\Controllers\HomeController@index',
    'as' => 'Bitm'
]);


Route::get('/about-us',[
    'uses' => 'App\Http\Controllers\HomeController@about',
    'as' => 'about-us'
]);

Route::get('/register-now',[
    'uses' => 'App\Http\Controllers\HomeController@registration',
    'as' => 'registration'
]);


Route::post('/registration',[
    'uses' => 'App\Http\Controllers\HomeController@newRegister',
    'as' => 'register'
]);



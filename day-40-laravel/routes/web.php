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

Route::get('/', function () {
//    return "Hello World";
    return view('test');
});


Route::get('/bitm', [
    'uses' => 'App\Http\Controllers\TestController@index',
    'as' => 'Bitm'
]);

Route::get('/all-catagory', [
    'uses' => 'App\Http\Controllers\TestController@catagory',
    'as' => 'Bitm'
]);



Route::get('/basis/seip', [
    'uses' => 'App\Http\Controllers\TestController@basisSeip',
    'as' => 'basis'
]);



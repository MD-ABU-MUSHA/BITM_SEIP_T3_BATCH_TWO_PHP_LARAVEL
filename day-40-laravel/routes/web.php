<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\BrandController;
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


Route::get('/',[
    'uses' => 'App\Http\Controllers\HomeController@index',
    'as' => 'Bitm'
]);


Route::get('/about-us',[
    'uses' => 'App\Http\Controllers\HomeController@about',
    'as' => 'about-us'
]);
Route::get('/odd-even',[
    'uses' => 'App\Http\Controllers\HomeController@oddEven',
    'as' => 'odd-even'
]);

Route::post('/oddEvenResult',[
    'uses' => 'App\Http\Controllers\HomeController@oddEvenResult',
    'as' => 'odd-even-result'
]);


Route::get('/count',[
    'uses' => 'App\Http\Controllers\HomeController@count',
    'as' => 'count'
]);



Route::resource('/category',categoryController::class);
Route::resource('/brand',BrandController::class);




Route::post('/count',[
    'uses' => 'App\Http\Controllers\HomeController@countResult',
    'as' => 'count'
]);


Route::get('/register-now',[
    'uses' => 'App\Http\Controllers\HomeController@registration',
    'as' => 'registration'
]);


Route::post('/registration',[
    'uses' => 'App\Http\Controllers\HomeController@newRegister',
    'as' => 'register'

]);



Route::get('/primeNumber',[
    'uses' => 'App\Http\Controllers\HomeController@prime',
    'as' => 'prime'
]);






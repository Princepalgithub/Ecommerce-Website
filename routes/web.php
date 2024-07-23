<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Authcontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','HomeController@index');

Route::get('/register','HomeController@register');
Route::post('/postregister','HomeController@postregister');
Route::get('/login','HomeController@login');
Route::post('/postlogin','HomeController@loginUser');
Route::get('/index',[HomeController::class,'indexview']);
Route::get('/product',[Authcontroller::class,'productview']);
Route::post('/Addproduct',[Authcontroller::class,'Addproduct']);
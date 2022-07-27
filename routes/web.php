<?php

use App\Http\Controllers\Admin\DemoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('welcome');
});

Route::get('/test', "Admin\DemoController@index");
Route::get('/register', "Auth\RegisterController@index")->name('form-register');
Route::post('/register', "Auth\RegisterController@add")->name('register');
Route::get('/login', 'Auth\LoginController@formLogin')->name('getLogin');
Route::post('/login', 'Auth\LoginController@postLogin')->name('postLogin');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

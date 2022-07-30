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
Route::group(
    [
        'prefix' => 'admin',
        'as' => 'admin.',
        'namespace' => 'Admin',
        // 'middleware' => 'Auth'
    ],
    function () {
        Route::get('/', function () {
            return 'dashboard admin';
        });
        Route::prefix('category')->as('category.')->group(function () {
            Route::get('/', 'CategoryController@index')->name('index');
            Route::get('/create', 'CategoryController@create')->name('create');
            Route::post('/store', 'CategoryController@store')->name('store');
            Route::get('/{id}/edit', 'CategoryController@edit')->name('edit');
            Route::put('/{id}', 'CategoryController@update')->name('update');
            Route::delete('/{id}', 'CategoryController@destroy')->name('destroy');
        });
        Route::prefix('user')->as('user.')->group(function () {
            Route::get('/', 'UserController@index')->name('index');
            Route::get('/create', 'UserController@create')->name('create');
            Route::post('/store', 'UserController@store')->name('store');
            Route::get('/{id}/edit', 'UserController@edit')->name('edit');
            Route::put('/{id}', 'UserController@update')->name('update');
            Route::delete('/{id}', 'UserController@destroy')->name('destroy');
        });
    }

);

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

Route::get('/login','LoginController@index');
Route::post('/auth-login','LoginController@authlogin');
Route::get('/logout','LoginController@logout');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function() {
    
    Route::get('/','BukuController@index');
Route::get('/buku-create','BukuController@create');
Route::post('/buku-save','BukuController@save');
Route::get('/buku-edit/{id}','BukuController@edit');
Route::post('/buku-update/{id}','BukuController@update');
Route::get('/buku-delete/{id}','BukuController@delete');

});
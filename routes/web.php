<?php

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
Route::resource('dangky','AccountController');
Route::resource('dangnhap','LoginController');
Route::post('dangnhap','LoginController@dangnhap')->name('dangnhap');








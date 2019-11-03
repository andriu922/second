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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact', function(){
//     return view('contact');
// });

// AppInfo
    Route::get('/', 'AppInfo@About');
    Route::get('/about', 'AppInfo@About');
    Route::get('/contact', 'AppInfo@Contacts');
    Route::get('/license', 'GRL');
    Route::get('/git','Git');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

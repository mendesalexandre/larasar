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
<<<<<<< HEAD
    return view('index');
=======
  return view('welcome');
});

Route::get('/url', function () {
    return env('APP_URL');
>>>>>>> modemb/dev
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('{path}', function () {
//   return view('welcome');
//   // return view('index');
// })->where('path', '.*');

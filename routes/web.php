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
<<<<<<< HEAD
    return view('prof');
=======
>>>>>>> 717d9acf45f92b4a16c0010a6bd6346225324add
=======
  return view('home');
>>>>>>> 919e40e5f7a8dcbf43031ff710383b1d13d3963a
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/otcplaces', function () {
    return view('otcplaces');
});

Route::get('/prof', function () {
    return view('prof');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

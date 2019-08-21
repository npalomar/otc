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
Route::view('/', "gallery");

Route::view('/signup', "signup");

Route::view('/registration', "registration");

Route::view('/otcplaces', "otcplaces");

Route::view('/welcome', "welcome");

Route::view('/slide', "slide");


?>

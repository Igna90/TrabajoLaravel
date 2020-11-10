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

Route::view('/', 'welcome');

Route::view('/main', 'MainPage');

Route::resource('admin','AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas de alumno
Route::view('/alumno', 'alumnos/index');
Route::view('/alumno/fichas', 'alumnos/fichas');
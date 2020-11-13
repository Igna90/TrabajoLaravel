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

Route::view('/', 'MainPage');

Route::resource('admin','AdminController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('empresa', 'EmpresaController');
Route::resource('tareas', 'TareasController');
Route::resource('fichas', 'FichasController');
Route::resource('ciclo', 'CicloController');

Route::get('logout', '\App\http\Controllers\Auth\LoginController@logout');
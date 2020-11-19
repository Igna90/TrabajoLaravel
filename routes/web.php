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

Auth::routes();

Route::get('logout', '\App\http\Controllers\Auth\LoginController@logout');
Route::view('privilegios', 'privilegios');

//Permisos por usuario logueado
Route::group(['middleware' => 'admin'], function () {
    Route::resource('usuario', 'UsuarioController');
    Route::resource('empresa', 'EmpresaController');
    Route::resource('ciclo', 'CicloController');

    Route::resource('fichas', 'FichasController');
    
});
Route::group(['middleware' => 'student'], function () {
    Route::resource('fichas', 'FichasController');
    Route::resource('asistencia', 'AsistenciaController');
});
Route::group(['middleware' => 'tl'], function () {
});
Route::group(['middleware' => 'te'], function () {
    Route::resource('tareas', 'TareasController');
    Route::resource('modulos', 'ModulosController');
});
// Borrar
Route::resource('admin','AdminController');
Route::get('/home', 'HomeController@index')->name('home');
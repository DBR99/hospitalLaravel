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

Route::get('/', function () {
    return view('welcome');
});
/**Route::get('/medicos', 'MedicosController@index');
Route::get('/medicos/crear', 'MedicosController@create');

Route::get('/pacientes', 'PacientesController@index');
Route::get('/pacientes/crear', 'PacientesController@create');*/

Route::resource('medicos', 'MedicosController');
Route::resource('pacientes', 'PacientesController');

/**Route::resource('user', 'UserController');*/ 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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



/**Route::resource('user', 'UserController');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['register'=>false,'reset'=>false]);
Route::resource('Admin/users','Admin\UserController')->Middleware('can:administrador-permisos');
Route::resource('pacientes', 'PacienteController')->middleware('can:administrador-permisos');
Route::resource('/hospital', 'HospitalController')->middleware('can:administrador-permisos');
Route::resource('/medicos', 'MedicoController')->Middleware('can:administrador-permisos');
Route::resource('/especialidad', 'EspecialidadController')->Middleware('can:administrador-y-medico-permisos');
Route::resource('/consultas', 'ConsultasController')->middleware('can:administrador-medico-paciente-permisos');
Route::resource('/diagnostico', 'DiagnosticoController')->Middleware('can:administrador-medico-paciente-permisos');
//Route::resource('/laboratorio', 'laboratorioController');


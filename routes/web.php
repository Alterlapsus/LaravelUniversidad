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

Route::get('vistados', 'App\Http\Controllers\micontrolador@vista2');
Route::get('vistatres', 'App\Http\Controllers\micontrolador@vista3');

Route::get('registrarlibro', 'App\Http\Controllers\micontrolador@registralibro')->name('registrarlibro');
Route::post('guardarlibro', 'App\Http\Controllers\micontrolador@guardarlibro')->name('guardarlibro');

Route::get('consultalibros', 'App\Http\Controllers\micontrolador@consultalibros')->name('consultalibros');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarlibro')->name('eliminarlibro');

// registar heroe
Route::get('registrarheroe', 'App\Http\Controllers\micontrolador@registrarheroe')->name('registrarheroe');
Route::post('guardarheroe', 'App\Http\Controllers\micontrolador@guardarheroe')->name('guardarheroe');

// consultar y eliminar heroe
Route::get('consultaheroe', 'App\Http\Controllers\micontrolador@consultaheroe')->name('consultaheroe');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarheroe')->name('eliminarheroe');

//editar y mostrar heroes
Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestraheroe')->name('muestraheroe');
Route::post('editar/{id}', 'App\Http\Controllers\micontrolador@editarheroe')->name('editarheroe');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
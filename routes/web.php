<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\PruebaMedicaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::controller(PacienteController::class)->group(function (){

    Route::get('pacientes/', 'index')->name('pacientes.index');
    Route::post('pacientes/', 'store')->name('pacientes.store');

    Route::get('pacientes/{id}/edit', 'edit')->name('pacientes.edit');
    Route::put('pacientes/{id}/update', 'update')->name('pacientes.update');

    Route::delete('pacientes/destroy/{id}', 'destroy')->name('pacientes.destroy');

});

Route::controller(PruebaMedicaController::class)->group(function (){

    Route::get('pruebas-medicas/', 'index')->name('pruebas-medicas.index');
    Route::post('pruebas-medicas/', 'store')->name('pruebas-medicas.store');

    Route::get('pruebas-medicas/{id}/edit', 'edit')->name('pruebas-medicas.edit');
    Route::put('pruebas-medicas/{id}/update', 'update')->name('pruebas-medicas.update');

    Route::delete('pruebas-medicas/destroy/{id}', 'destroy')->name('pruebas-medicas.destroy');

});

Route::controller(ResultadoController::class)->group(function (){

    Route::get('resultados/', 'index')->name('resultados.index');
    Route::post('resultados/', 'store')->name('resultados.store');

    Route::get('resultados/{id}/edit', 'edit')->name('resultados.edit');
    Route::put('resultados/{id}/update', 'update')->name('resultados.update');

    Route::delete('resultados/destroy/{id}', 'destroy')->name('resultados.destroy');

});

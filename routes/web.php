<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\AlquilerEquipoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/alquileres', [AlquilerController::class, 'index'])->name('alquileres.index');
Route::get('/alquiler-equipos', [AlquilerEquipoController::class, 'index'])->name('alquiler-equipos.index');

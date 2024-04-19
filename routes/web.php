<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\MedicinasController;

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
    return view('welcome');
});

Route::resource('/clientes','App\Http\Controllers\ClientesController');
Route::resource('/mascotas', 'App\Http\Controllers\MascotasController');
Route::resource('/medicinas', 'App\Http\Controllers\MedicinasController');
Route::resource('/citas', 'App\Http\Controllers\CitasController');

//Mascotas
Route::get('/mascotas/{id}', [MascotasController::class, 'show']);
Route::get('/mascotas/{id}/create', [MascotasController::class, 'create']);
Route::get('/mascotas/{id}/eliminar', [MascotasController::class, 'delete']);

//Citas
Route::get('/citas/{id}/editar', [CitasController::class, 'edit'])->name('citas.edit');
Route::get('/citas/{id}/eliminar', [CitasController::class, 'eliminar'])->name('citas.eliminar');
Route::get('/citas/create/{id}/{id2}', [CitasController::class, 'create']);
Route::get('/citas/{id}/{id2}', [CitasController::class, 'show']);



//Medicinas



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/bienvenida', function () {
        return view('bienvenida.index');
    })->name('bienvenida');
});

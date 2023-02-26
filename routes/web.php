<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', [\App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/create', [\App\Http\Controllers\ClienteController::class, 'create'])->name('cliente.create');
Route::post('/create', [\App\Http\Controllers\ClienteController::class, 'store'])->name('cliente.store');
Route::get('/edit/{id}', [\App\Http\Controllers\ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/edit/{id}', [\App\Http\Controllers\ClienteController::class, 'update'])->name('cliente.update');
Route::get('/show', [\App\Http\Controllers\ClienteController::class, 'show'])->name('cliente.show');
Route::delete('/delete/{id}', [\App\Models\Cliente::class, 'destroy'])->name('cliente.destroy');
Route::get('/cliente/resultado', [\App\Models\Cliente::class, 'resultado'])->name('cliente.resultado');


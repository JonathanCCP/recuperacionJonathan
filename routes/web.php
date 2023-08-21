<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MarcaController;

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

// crea las rutas  correspondientes de las funciones que usen el controller, y su funcion y asignales un name
Route::get('/familias', [FamiliaController::class, 'index'])->name('familias.index');
Route::get('/familias/create', [FamiliaController::class, 'create'])->name('familias.create');
Route::post('/familias/store', [FamiliaController::class, 'store'])->name('familias.store');
Route::get('/familias/edit/{id}', [FamiliaController::class, 'edit'])->name('familias.edit');
Route::put('/familias/update/{id}', [FamiliaController::class, 'update'])->name('familias.update');

Route::get('/marcas', [MarcaController::class, 'index'])->name('marcas.index');
Route::get('/marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
Route::post('/marcas/store', [MarcaController::class, 'store'])->name('marcas.store');

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome.index');

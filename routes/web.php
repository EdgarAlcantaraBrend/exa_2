<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibreriaControl;
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

Route::get('/', [LibreriaControl::class, 'index'])->name('libros.index');
Route::get('actualizar/{libro}/actualizar', [LibreriaControl::class, 'actualizar'])->name('libros.actualizar');
Route::put('index/{libro}', [LibreriaControl::class, 'update'])->name('libros.update');
/* Ruta para eliminar un registro */
Route::delete('index/{libro}', [LibreriaControl::class, 'eliminar'])->name('libros.eliminar');
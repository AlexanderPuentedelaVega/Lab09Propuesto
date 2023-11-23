<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/libros', [App\Http\Controllers\LibroController::class, 'index'])->name('libros');
Route::post('/agregar-al-carrito/{id}', [App\Http\Controllers\CarritoController::class, 'agregar'])->name('agregarAlCarrito');
Route::get('/portada/{ruta}', [App\Http\Controllers\FotoController::class, 'mostrarPortada'])->name('mostrarPortada');

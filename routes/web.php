<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', HomeController::class);
Route::get('/', HomeController::class);



Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login');
    Route::get('/register', 'registerPage')->name('register');
    Route::get('/inicio', 'inicioPage')->name('inicio');
});

//Paginas de registro, login y privada
// Route::view('/login', 'login')->name('login');
// Route::view('/registro', 'register')->name('registro');
// Route::view('/privada', 'secret')->name('privada');

//Validación de login, registro y log out para salir de la cuenta
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
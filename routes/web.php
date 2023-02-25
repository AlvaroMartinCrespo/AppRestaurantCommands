<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ComidaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\PaginaController;

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

Route::controller(OrdenController::class)->group(function () {
    Route::get('crearOrden/{usuarioId}/{id}', 'crearOrden')->name('crearOrden');
    Route::get('eliminarComandas', 'eliminarComandas')->name('eliminarComandas');
    Route::get('servir/{id}', 'servir')->name('servir');
    Route::get('enviarOrden/{id}', 'enviar')->name(('enviarOrden'));
    Route::get('eliminarPlatoComanda/{idComanda}/{idPlato}', 'eliminarPlato')->name('eliminarPlatoComanda');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'loginPage')->name('login');
    Route::get('/register', 'registerPage')->name('register');
    Route::get('/inicio', 'inicioPage')->middleware('auth')->name('inicio');
    Route::post('/validar-registro', 'register')->name('validar-registro');
    Route::post('/inicia-sesion', 'login')->name('inicia-sesion');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(PaginaController::class)->group(function () {
    Route::get('quienesSomos', 'quienesSomosPage')->middleware('auth')->name('quienesSomos');
    Route::get('home', 'homePage')->middleware('auth')->name('home');
    Route::get('añadirPlato', 'añadirPlato')->middleware('auth')->name('añadirPlato');
    Route::get('eliminarPlato', 'eliminarPlato')->middleware('auth')->name('eliminarPlato');
    Route::get('comandas', 'comandas')->middleware('auth')->name('comandas');
});

Route::controller(ComidaController::class)->group(function () {
    Route::get('crearComida', 'crearComida')->name('crearComida');
    Route::get('eliminarComida/', 'eliminarComida')->name('eliminarComida');
});

Route::controller(OrdenController::class)->group(function () {
    Route::get('enviarComanda', 'guardarOrden')->name('enviarComanda');
});

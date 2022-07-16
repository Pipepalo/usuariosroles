<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\InventarioController;

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

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/login', [LoginController::class, 'show']);

Route::get('/home', [HomeController::class, 'show']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/encuesta', [EncuestaController::class, 'show']);


Route::post('encuesta/insertar', [EncuestaController::class, 'insertarDatos'])->name('encuesta.insertarDatos');

Route::post('/encuesta', [EncuestaController::class, 'buscar'])->name('encuesta.busqueda');

Route::post('/convertir', [InventarioController::class, 'reportar']);


Route::get('/encuestaP', function () {
    return view('/encuesta.encuestaPrueba');
});

Route::get('/sistema', function () {
    return view('/inventario.sistema');
});
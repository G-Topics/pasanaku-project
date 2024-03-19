<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\MonedaController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\RolController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('monedas', MonedaController::class);
Route::resource('estados', EstadoController::class);
Route::resource('jugadores', JugadorController::class);
Route::resource('roles', RolController::class);

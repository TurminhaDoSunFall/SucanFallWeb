<?php

use App\Http\Controllers\initial\HistoriaController;
use App\Http\Controllers\initial\InitialController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CreditosController;
use App\Http\Controllers\CadastroFotoController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\DetalhessController;
use App\Http\Controllers\MinhaGaleriaController;
use App\Http\Controllers\EditarController;
use App\Http\Controllers\ConfigurcoesController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [InitialController::class , "index"]);
Route::get("/Historia", [HistoriaController::class , "index"]);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');

  Route::resource("Creditos", CreditosController::class);
  Route::resource("Usuario", UsuarioController::class);
  Route::resource("Cadastrofoto", CadastroFotoController::class);
  Route::resource("Galeria", GaleriaController::class);
  Route::resource("Detalhes", DetalhessController::class);
  Route::resource("Minhagaleria", MinhaGaleriaController::class);
  Route::resource("Editar", EditarController::class);
  Route::resource("Config", ConfigurcoesController::class);
});

//Route::get("/U", [UsuarioController::class , "index"]);

//Route::get("/Historia", [HistoriaController::class ,"index"]);

<?php

use App\Http\Controllers\initial\HistoriaController;
use App\Http\Controllers\initial\InitialController;
use App\Http\Controllers\UsuarioController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');

  Route::resource("historia", HistoriaController::class);
  Route::resource("creditos", CreditosController::class);
  Route::resource("usuario", UsuarioController::class);
  Route::resource("cadastrofoto", CadastroFotoController::class);
  Route::resource("galeria", GaleriaController::class);
  Route::resource("detalhes", DetalhessController::class);
  Route::resource("minhagaleria", MinhaGaleriaController::class);
  Route::resource("perfil", PerfilController::class);
  Route::resource("editar", EditarController::class);
  Route::resource("config", ConfigurcoesController::class);
});

//Route::get("/U", [UsuarioController::class , "index"]);

//Route::get("/Historia", [HistoriaController::class ,"index"]);

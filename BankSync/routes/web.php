<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\BankSyncController;



/*php
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
})->name('welcome');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Rota para exibir a página financeira
    Route::get('/financeiro', [BankSyncController::class, 'index'])->name('financeiro.index');

    // Rota para exibir a página de configuração
    Route::get('/configuracao', [BankSyncController::class, 'configuracao'])->name('financeiro.configuracao');

    // Rotas CRUD para Receitas
    Route::resource('/receitas', ReceitaController::class);

    // Rotas CRUD para Despesas
    Route::resource('/despesas', DespesaController::class);
});







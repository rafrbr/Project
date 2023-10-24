<?php
<<<<<<< HEAD

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\DespesaController;
use App\Http\Controllers\BankSyncController;
=======
use Illuminate\Support\Facades\Route;
use App\Models\Financeiro;
use App\Http\Controllers\FinanceiroControler;
>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017



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
<<<<<<< HEAD
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






=======
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/criar_conta', function () {
    return view('criar_conta');
})->name('criar');

Route::get('/esqueci', function () {
    return view('esqueci');
})->name('esqueci');


Route::get('/financeiro', [FinanceiroControler::class,'show'])->name('financeiro');

Route::post('/financeiro', [FinanceiroControler::class,'addData']);

Route::get('/delete/{id}', [FinanceiroControler::class,'remove']);

Route::get('/receitas', function () {
    return view('receitas');
})->name('receitas');

Route::get('/despesas', function () {
    return view('despesas');
})->name('despesas');

Route::get('/relatorio', function () {
    return view('relatorio');
})->name('relatorio');

Route::get('/configuracao', function () {
    return view('configuracao');
})->name('configuracao');






>>>>>>> 75d47fce8b9471821f274c26e6223546892f4017

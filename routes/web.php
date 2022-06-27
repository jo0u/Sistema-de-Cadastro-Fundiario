<?php

use App\Http\Controllers\ComunidadeController;
use App\Http\Controllers\ExecutorController;
use App\Http\Controllers\RequerenteController;
use App\Http\Controllers\MuncipioController;
use App\Http\Controllers\ProcuradorController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\StatusController;
use App\Http\Livewire\{
    ProcController,
    TesteController
};
use App\Models\Procuradores;
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
//*****************************Rotas de requerentes**********************************************************/

/* administrador*/ 




/******************************************** Rotas Processos *******************************************/

Route::get('/processos/dashboard',[ProcessoController::class, 'dashboard'])->middleware('auth');
Route::get('/processos/cadastrar',[ProcessoController::class, 'create'])->middleware('auth');
Route::post('/processos',[ProcessoController::class, 'store'])->middleware('auth');






/********************************************************************************************************/

    Route::get('/requerentes/dashboard',[RequerenteController::class, 'dashboard'])->middleware('auth');
Route::get('/requerentes/cadastrar',[RequerenteController::class, 'create'])->middleware('auth');
Route::get('/requerentes/{id}',[RequerenteController::class, 'show'])->middleware('auth');
Route::post('/requerentes',[RequerenteController::class,'store'])->middleware('auth');
Route::delete('/requerentes/{id}',[RequerenteController::class,'destroy'])->middleware('auth');
Route::get('/requerentes/edit/{id}',[RequerenteController::class,'edit'])->middleware('auth');
Route::put('/requerentes/update/{id}',[RequerenteController::class,'update'])->middleware('auth');


/************************************* Rotas Comunidades ****************************************************/
Route::get('/comunidades/dashboard',[ComunidadeController::class,'dashboard'])->middleware('auth');
Route::get('/comunidades/cadastrar',[ComunidadeController::class,'create'])->middleware('auth');
Route::post('/comunidades',[ComunidadeController::class,'store'])->middleware('auth');
Route::get('/comunidades/show',[ComunidadeController::class, 'show'])->middleware('auth');
Route::get('/comunidades/edit/{id}',[ComunidadeController::class,'edit'])->middleware('auth');
Route::delete('/comunidades/{id}',[ComunidadeController::class, 'destroy'])->middleware('auth');
Route::put('/comunidades/update/{id}',[ComunidadeController::class, 'update'])->middleware('auth');

/***********************************************************************************************************/
/*****************************************  Rotas Municipios **********************************************/

Route::get('/municipios/dashboard',[MuncipioController::class,'dashboard'])->middleware('auth');
Route::get('/municipios/cadastrar',[MuncipioController::class,'create'])->middleware('auth');
Route::get('/municipios/{id}',[MuncipioController::class, 'show'])->middleware('auth');
Route::post('/municipios',[MuncipioController::class,'store'])->middleware('auth');
Route::delete('/municipios/{id}',[MuncipioController::class,'destroy'])->middleware('auth');
Route::get('/municipios/edit/{id}',[MuncipioController::class,'edit'])->middleware('auth');
Route::put('/municipios/update/{id}',[MuncipioController::class,'update'])->middleware('auth');

/**********************************************************************************************************/

/*****************************************  Rotas Projetos **********************************************/
Route::get('/projetos/dashboard',[ProjetoController::class,'dashboard'])->middleware('auth');
Route::get('/projetos/cadastrar',[ProjetoController::class,'create'])->middleware('auth');
Route::post('/projetos',[ProjetoController::class,'store'])->middleware('auth');
Route::get('/projetos/{id}',[ProjetoController::class,'show'])->middleware('auth');
Route::get('/projetos/edit/{id}',[ProjetoController::class,'edit'])->middleware('auth');
Route::put('/projetos/update/{id}',[ProjetoController::class,'update'])->middleware('auth');
Route::delete('/projetos/{id}',[ProjetoController::class,'destroy'])->middleware('auth');


/**********************************************************************************************************/

/*************************************** Rotas Procuradores ************************************************/
Route::get('/procuradores/dashboard',[ProcuradorController::class,'dashboard'])->middleware('auth');
Route::get('/procuradores/cadastrar',[ProcuradorController::class,'create'])->middleware('auth');
Route::post('/procuradores',[ProcuradorController::class,'store'])->middleware('auth');
Route::get('/procuradores/{id}',[ProcuradorController::class,'show'])->middleware('auth');
Route::get('/procuradores/edit/{id}',[ProcuradorController::class,'edit'])->middleware('auth');
Route::put('/procuradores/update/{id}',[ProcuradorController::class,'update'])->middleware('auth');
Route::delete('/procuradores/{id}',[ProcuradorController::class,'destroy'])->middleware('auth');

/********************************************************************************************************/

/************************************** Rotas Executores *************************************************/

Route::get('/executadores/dashboard',[ExecutorController::class,'dashboard'])->middleware('auth');
Route::get('/executadores/cadastrar',[ExecutorController::class,'create'])->middleware('auth');
Route::post('/executadores',[ExecutorController::class,'store'])->middleware('auth');
Route::get('/executadores/{id}',[ExecutorController::class,'show'])->middleware('auth');
Route::get('/executadores/edit/{id}',[ExecutorController::class,'edit'])->middleware('auth');
Route::put('/executadores/update/{id}',[ExecutorController::class,'update'])->middleware('auth');
Route::delete('/executadores/{id}',[ExecutorController::class,'destroy'])->middleware('auth');



/*********************************************************************************************************/

/******************************************** Rotas Situação *******************************************/

Route::get('/situacao/dashboard',[StatusController::class, 'dashboard'])->middleware('auth');
Route::get('/situacao/cadastrar',[StatusController::class, 'create'])->middleware('auth');
Route::post('/situacao',[StatusController::class, 'store'])->middleware('auth');





/********************************************************************************************************/





/******************************************************************************************************** */


Route::get('/livewire/teste',TesteController::class,'render')->middleware('auth');
Route::get('/livewire/proc-controller',ProcController::class,'render')->middleware('auth');


Route::post('/teste',[TesteController::class, 'create'])->middleware('auth');







/*************************************************************************************************************** */








Route::get('/home', function () {
    
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

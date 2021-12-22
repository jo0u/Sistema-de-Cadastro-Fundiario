<?php

use App\Http\Controllers\ComunidadeController;
use App\Http\Controllers\RequerenteController;
use App\Http\Controllers\MuncipioController;
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
Route::get('/requerentes/dashboard',[RequerenteController::class, 'dashboard'])->middleware('auth');
Route::get('/requerentes/cadastrar',[RequerenteController::class, 'create'])->middleware('auth');
Route::get('/requerentes/{id}',[RequerenteController::class, 'show'])->middleware('auth');
Route::post('/requerentes',[RequerenteController::class,'store'])->middleware('auth');
Route::delete('/requerentes/{id}',[RequerenteController::class,'destroy'])->middleware('auth');
Route::get('/requerentes/edit/{id}',[RequerenteController::class,'edit'])->middleware('auth');
Route::put('/requerentes/update/{id}',[RequerenteController::class,'update'])->middleware('auth');
/*************************************************************************************************************** */






/************************************* Rotas Comunidades ****************************************************/
Route::get('/comunidades/dashboard',[ComunidadeController::class,'dashboard'])->middleware('auth');
Route::get('/comunidades/cadastrar',[ComunidadeController::class,'create'])->middleware('auth');
Route::post('/comunidades',[ComunidadeController::class,'store'])->middleware('auth');


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





Route::get('/home', function () {
    
    return view('welcome');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

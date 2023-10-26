<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/criarTeste', [TestController::class, 'criarArquivoJSON']);
Route::get('/getTeste/{id}', [TestController::class, 'lerArquivoJSON']);
Route::put('/putTeste/{id}', [TestController::class, 'atualizarArquivoJSON']);
Route::get('getUsers', [TestController::class,'allUsers']);
Route::get('getUsers/{username}', [TestController::class,'specificUser']);
Route::get('school/{id}', [TestController::class,'school']);
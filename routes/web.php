<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsfeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/quiz', [QuizController::class, 'index'])->middleware(['auth', 'verified'])->name('quiz');
Route::post('/sendQuiz', [QuizController::class, 'sendQuiz'])->middleware(['auth', 'verified'])->name('sendQuiz');
Route::get('/resultQuiz', [QuizController::class, 'result'])->middleware(['auth', 'verified'])->name('resultQuiz');

Route::get('/@{username}', [ProfileController::class, 'timeline'])->middleware(['auth', 'verified']);

Route::get('/feed', [NewsfeedController::class, 'index'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/criarTeste', [TestController::class, 'criarArquivoJSON']);
Route::get('/getTeste/{id}', [TestController::class, 'lerArquivoJSON']);
Route::put('/putTeste/{id}', [TestController::class, 'atualizarArquivoJSON']);
Route::get('getUsers', [TestController::class,'allUsers']);
Route::get('getUsers/{username}', [TestController::class,'specificUser']);


Route::get('/admin/logout-all', [AdminController::class, 'logoutAllUsers'])->middleware('auth'); // Add any required middleware

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});


require __DIR__.'/auth.php';

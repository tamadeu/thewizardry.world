<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsfeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
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

Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified', 'quiz'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/quiz', [QuizController::class, 'index'])->middleware(['auth', 'verified', 'quiz'])->name('quiz');
Route::post('/sendQuiz', [QuizController::class, 'sendQuiz'])->middleware(['auth', 'verified', 'quiz'])->name('sendQuiz');
Route::get('/resultQuiz', [QuizController::class, 'result'])->middleware(['auth', 'verified', 'quiz'])->name('resultQuiz');

Route::get('/@{username}', [ProfileController::class, 'timeline'])->middleware(['auth', 'verified', 'quiz']);

Route::get('/feed', [NewsfeedController::class, 'index'])->middleware(['auth', 'verified', 'quiz']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('wwadmin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');
    Route::get('/students/view', [AdminController::class, 'studentsView']);

    Route::get('/gamification', [AdminController::class, 'gamification'])->name('gamification');

    Route::prefix('students')->group(function () {
        Route::get('/', [AdminController::class, 'students'])->name('students');

        Route::get('/new', [AdminController::class, 'newStudent']);
        Route::get('/{id}', [AdminController::class, 'viewStudent']);
        Route::get('/{id}/delete', [AdminController::class,'deleteStudent']);

    });


    Route::prefix('schools')->group(function () {
        Route::get('/', [AdminController::class, 'schools'])->name('schools');

        Route::get('/new', [AdminController::class, 'newSchool']);
        Route::get('/{id}', [AdminController::class, 'viewSchool']);
        Route::get('/{school_id}/delete', [AdminController::class,'deleteSchool']);

        Route::get('/{school_id}/{house_id}/delete', [AdminController::class,'deleteHouse']);

    });

    Route::prefix('quiz')->group(function () {
        Route::get('/', [AdminController::class, 'quiz'])->name('quiz');

        /* quiz */
        Route::get('/new', [AdminController::class, 'newQuiz']);
        Route::get('/{id}', [AdminController::class, 'editQuiz']);
        Route::get('/{quiz_id}/delete', [AdminController::class,'deleteQuiz']);

        /* questions */
        Route::get('/{quiz_id}/new', [AdminController::class, 'newQuestion']);
        Route::get('/{quiz_id}/{id}', [AdminController::class, 'editQuestions']);  
        Route::get('/{quiz_id}/{id}/delete', [AdminController::class, 'deleteQuestion']);  
        
        /* answers */
        Route::get('/{quiz_id}/{question_id}/new', [AdminController::class, 'newAnswer']);
        Route::get('/{quiz_id}/{question_id}/{id}', [AdminController::class, 'editAnswer']);
        Route::get('/{quiz_id}/{question_id}/{id}/delete', [AdminController::class, 'deleteAnswer']);
    
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [AdminController::class, 'settings'])->name('settings');

    });

    Route::post('/add_quiz', [AdminController::class, 'addQuiz']);
    Route::post('/add_answer', [AdminController::class, 'addAnswer']);
    Route::post('/add_question', [AdminController::class, 'addQuestion']);
    Route::post('/add_school', [AdminController::class, 'addSchool']);
    Route::post('/add_house', [AdminController::class, 'addHouse']);
    Route::post('/add_level', [AdminController::class, 'addLevel']);
    Route::post('/updateQuiz', [AdminController::class,'updateQuiz']);
    Route::post('/updateQuestion', [AdminController::class,'updateQuestion']);
    Route::post('/updateAnswer', [AdminController::class,'updateAnswer']);
    Route::post('/updateSchool', [AdminController::class,'updateSchool']);
    Route::post('/updateStudent', [AdminController::class,'updateStudent']);
});

require __DIR__.'/auth.php';

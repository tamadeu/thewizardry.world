<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsfeedController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TestController;
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

Route::get('/test', [TestController::class, 'testBlade'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('account')->middleware(['auth', 'admin', 'quiz'])->group(function () {
    Route::get('/profile', [AccountController::class, 'profile_info'])->name('profile.info');
    Route::get('/social', [AccountController::class, 'profile_social'])->name('profile.social');
    Route::get('/notifications', [AccountController::class, 'profile_notifications'])->name('profile.notifications');
    Route::get('/messages', [AccountController::class, 'profile_messages'])->name('profile.messages');
    Route::get('/requests', [AccountController::class, 'profile_requests'])->name('profile.requests');

    Route::get('/info', [AccountController::class, 'account_info'])->name('account.info');
    Route::get('/password', [AccountController::class, 'account_password'])->name('account.password');
    Route::get('/settings', [AccountController::class, 'account_settings'])->name('account.settings');

    Route::get('/groups', [AccountController::class, 'groups_manage'])->name('groups.manage');
    Route::get('/invitations', [AccountController::class, 'groups_invitations'])->name('groups.invitations');

    Route::get('/store', [AccountController::class, 'store_account'])->name('store.account');
    Route::get('/statement', [AccountController::class, 'store_statement'])->name('store.statement');
    Route::get('/items', [AccountController::class, 'store_items'])->name('store.items');
    Route::get('/downloads', [AccountController::class, 'store_downloads'])->name('store.downloads');

    Route::post('updateAvatar', [AccountController::class,'updateAvatar'])->name('updateAvatar');
    Route::post('updateCover', [AccountController::class,'updateCover'])->name('updateCover');
});


Route::post('/post', [NewsfeedController::class,'postContent'])->name('post');
Route::post('/react', [NewsfeedController::class,'react'])->name('react');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArticleController::class, 'index'])->name('home');
Route::get('about', [ArticleController::class, 'about'])->name('about');
Route::get('activites', [ArticleController::class, 'activites'])->name('activites');
Route::get('teacher', [ArticleController::class, 'teacher'])->name('teacher');
Route::get('viewteacher/{id}', [EnseignantController::class, 'show'])->name('viewteacher');
Route::get('viewarticle/{id}', [EnseignantController::class, 'show'])->name('viewarticle');
Route::get('articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('contact', [ArticleController::class, 'contact'])->name('contact');

Route::post('addNewsletter', [NewsletterController::class, 'store'])->name('addNewsletter');
Route::post('addNewMessage', [ContactController::class, 'store'])->name('addNewMessage');
Route::post('addNewMessageProf', [EnseignantController::class, 'store'])->name('addNewMessageProf');

Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin_articles', [ArticleController::class, 'index'])->name('admin_articles');
    Route::get('/admin_profs', [EnseignantController::class, 'index'])->name('admin_profs');
    Route::get('/admin_messages', [ContactController::class, 'index'])->name('admin_messages');
    Route::get('/admin_activites', [ActiviteController::class, 'index'])->name('admin_activites');
    Route::get('/admin_neswsletter', [NewsletterController::class, 'index'])->name('admin_neswsletter');
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
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

Route::get('/dashboard', [EnseignantController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin_articles', [ArticleController::class, 'create'])->name('admin_articles');
    Route::get('/admin_profs', [EnseignantController::class, 'index'])->name('admin_profs');
    Route::get('/admin_messages', [ContactController::class, 'index'])->name('admin_messages');
    Route::get('/admin_activites', [ActiviteController::class, 'index'])->name('admin_activites');
    Route::get('/admin_neswsletter', [NewsletterController::class, 'index'])->name('admin_neswsletter');

    Route::get('editProf/{id}', [EnseignantController::class, 'show_admin'])->name('editProf');
    Route::get('viewMsg/{id}', [EnseignantController::class, 'show_msg'])->name('viewMsg');
    Route::get('editCat/{id}', [CategorieController::class, 'show'])->name('editCat');
    Route::get('editeGalerie/{id}', [ActiviteController::class, 'show'])->name('editeGalerie');

    Route::post('updateProf', [EnseignantController::class, 'update'])->name('updateProf');
    Route::post('updateCat', [CategorieController::class, 'update'])->name('updateCat');
    Route::post('updateGal', [ActiviteController::class, 'update'])->name('updateGal');

    Route::post('/addProf', [EnseignantController::class, 'storeProf'])->name('addProf');
    Route::post('/addCategorie', [CategorieController::class, 'store'])->name('addCategorie');
    Route::post('/addGalerie', [ActiviteController::class, 'store'])->name('addGalerie');

    Route::get('deleteCat/{id}', [CategorieController::class, 'destroy'])->name('deleteCat');
    Route::get('deleteGalerie/{id}', [ActiviteController::class, 'destroy'])->name('deleteGalerie');

});

require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PageController;

// ------------------------
// PAGE D’ACCUEIL (publique)
// ------------------------
Route::get('/', function () {
    return view('index');
})->name('home');

// ------------------------
// PAGE ACTUALITÉS (publique)
// ------------------------
Route::get('/actualites', [PageController::class, 'actualites'])->name('actualites');
Route::get('/actualites/{actualite:slug}', [PageController::class, 'show'])->name('actualites.show');

// ------------------------
// PAGE PROJETS (publique)
// ------------------------
Route::get('/projets', [PageController::class, 'projets'])->name('projets');

// ------------------------
// PAGE CABINET (publique)
// ------------------------
Route::get('/cabinet', function () {
    return view('cabinet');
})->name('cabinet');


// ------------------------
// PAGE CONTACT (publique)
// ------------------------
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// ------------------------
// PROFIL & LOGOUT DE BREEZE
// ------------------------
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// ------------------------
// ESPACE ADMIN
// ------------------------
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('actualites', ActualiteController::class);
    Route::resource('projets', ProjetController::class);
    Route::resource('categories', CategorieController::class)->except(['show']);
});


// ------------------------
// ROUTES D'AUTHENTIFICATION BREEZE
// ------------------------
require __DIR__.'/auth.php';

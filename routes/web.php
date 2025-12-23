<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;

// ------------------------
// PAGE D’ACCUEIL (publique)
// ------------------------
Route::get('/', function () {
    return view('index');
})->name('home');

// ------------------------
// PAGE ACTUALITÉS (publique)
// ------------------------
Route::get('/actualites', function () {
    return view('actualites');
})->name('actualites');

// ------------------------
// PAGE PROJETS (publique)
// ------------------------
Route::get('/projets', function () {
    return view('projets');
})->name('projets');

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
// TON ESPACE ADMIN PERSONNALISÉ
// ------------------------
Route::middleware(['auth'])
    ->get('/admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard');

// ------------------------
// ROUTES D'AUTHENTIFICATION BREEZE
// ------------------------
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/actualites', function () {
    return view('actualites');
})->name('actualites');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/changelog', function () {
    return response()->file(public_path('changelog.txt'));
})->name('changelog');
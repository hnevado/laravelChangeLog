<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/changelog', function () {
    return response()->file(public_path('changelog.txt'));
})->name('changelog');
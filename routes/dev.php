<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dev.dashboard');
})->name('dev.dashboard');
<?php

use App\Http\Controllers\AuthController;

// Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
//     return view('dashboard');
// })->name('auth.dashboard');

Route::any('/welcome', [AuthController::class, 'welcome'])->name('auth.welcome');

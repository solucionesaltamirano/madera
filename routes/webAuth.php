<?php

use App\Http\Controllers\AuthController;

// Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
//     return view('dashboard');
// })->name('auth.dashboard');

Route::any('/welcome', [AuthController::class, 'welcome'])->name('auth.welcome');
Route::any('/chat', [AuthController::class, 'chat'])->name('auth.chat');
Route::any('/room-chat', [AuthController::class, 'roomChat'])->name('auth.room-chat');

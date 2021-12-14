<?php

use App\Http\Controllers\AuthController;

// Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
//     return view('dashboard');
// })->name('auth.dashboard');

Route::any('/welcome', [AuthController::class, 'welcome'])->name('auth.welcome');
Route::any('/chat', [AuthController::class, 'chat'])->name('auth.chat');
Route::any('/chat-room', [AuthController::class, 'chatRoom'])->name('auth.chat-room');
Route::any('/items', [AuthController::class, 'items'])->name('auth.items');

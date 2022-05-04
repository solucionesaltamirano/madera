<?php

use App\Http\Controllers\AuthController;

Route::get('/test', [AuthController::class, 'test'])->name('auth.test');
Route::any('/welcome', [AuthController::class, 'welcome'])->name('auth.welcome');
Route::any('/chat', [AuthController::class, 'chat'])->name('auth.chat');
Route::any('/chat-room', [AuthController::class, 'chatRoom'])->name('auth.chat-room');
Route::any('/menus-has-items', [AuthController::class, 'menusHasItems'])->name('auth.menus-has-items');


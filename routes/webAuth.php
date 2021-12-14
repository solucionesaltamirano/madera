<?php

use App\Http\Controllers\AuthController;

// Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
//     return view('dashboard');
// })->name('auth.dashboard');

Route::any('/welcome', [AuthController::class, 'welcome'])->name('auth.welcome');
Route::any('/chat', [AuthController::class, 'chat'])->name('auth.chat');
Route::any('/chat-room', [AuthController::class, 'chatRoom'])->name('auth.chat-room');
Route::any('/items-from-routes', [AuthController::class, 'itemsFromRoutes'])->name('auth.items-from-routes');
Route::post('/items-from-routes-save', [AuthController::class, 'itemsFromRoutesSave'])->name('auth.items-from-routes-save');
Route::any('/menus-has-items', [AuthController::class, 'menusHasItems'])->name('auth.menus-has-items');


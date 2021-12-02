<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/test', [HomeController::class, 'test'])->name('admin.test');

Route::resource('externalAuths', App\Http\Controllers\ExternalAuthController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('menus', App\Http\Controllers\MenuController::class);
Route::resource('items', App\Http\Controllers\ItemController::class);
Route::resource('chats', App\Http\Controllers\ChatController::class);

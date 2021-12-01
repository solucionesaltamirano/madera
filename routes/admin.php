<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Livewire\Test;

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/test', [HomeController::class, 'test'])->name('admin.test');

Route::resource('externalAuths', App\Http\Controllers\ExternalAuthController::class);

Route::resource('users', App\Http\Controllers\UserController::class);

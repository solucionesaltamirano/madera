<?php

use App\Http\Controllers\AuthController;

//route for deploy in server test
Route::any('/welcome', [AuthController::class, 'welcome'])->name('welcome');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::any('/items/from-routes', [App\Http\Controllers\ItemController::class, 'itemsFromRoutes'])->name('items.from-routes');
Route::post('/items/from-routes-save', [App\Http\Controllers\ItemController::class, 'itemsFromRoutesSave'])->name('items.from-routes-save');
Route::any('/permissions/from-routes', [App\Http\Controllers\PermissionController::class, 'permissionsFromRoutes'])->name('permissions.from-routes');
Route::post('/permissions/from-routes-save', [App\Http\Controllers\PermissionController::class, 'permissionsFromRoutesSave'])->name('permissions.from-routes-save');

Route::resource('externalAuths', App\Http\Controllers\ExternalAuthController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('menus', App\Http\Controllers\MenuController::class);
Route::resource('items', App\Http\Controllers\ItemController::class);
Route::resource('chats', App\Http\Controllers\ChatController::class);
Route::resource('chatRooms', App\Http\Controllers\ChatRoomController::class);
Route::resource('blogCategories', App\Http\Controllers\BlogCategoryController::class);
Route::resource('businessConfigurations', App\Http\Controllers\BusinessConfigurationController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('clienteTelefonos', App\Http\Controllers\ClienteTelefonoController::class);
Route::resource('clienteEmpresas', App\Http\Controllers\ClienteEmpresaController::class);
Route::resource('certificados', App\Http\Controllers\CertificadoController::class);
Route::resource('logErrores', App\Http\Controllers\LogErroreController::class);

Route::get('certificados/emitPdf/{hash}', [App\Http\Controllers\CertificadoController::class, 'emitPdf'])->name('certificados.emitPdf');

Route::get('certificados/findQr/{hash}', [App\Http\Controllers\CertificadoController::class, 'findQr'])->name('certificados.findQr');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/template', function () {
    return view('layouts.master');
});
Route::group(['prefix' => 'admin'], function () {
    Route::resource('roles', RolesController::class, ['names' => 'admin.roles']);
    Route::resource('users', UsersController::class, ['names' => 'admin.users']);
    Route::resource('categories', CategoryController::class, ['names' => 'admin.categories']);
});

require __DIR__ . '/auth.php';

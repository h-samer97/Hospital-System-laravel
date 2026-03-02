<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

    Route::get('user/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('user.login');
    Route::get('admin/login', [AdminController::class, 'create'])->middleware('guest')->name('admin.login');



Route::get('user/dashboard', function() {
    return view('dashboard.users.dashboard');
})->middleware(['auth:web']);

Route::get('admin/dashboard', function() {
    return view('dashboard.admins.dashboard');
})->middleware(['auth:admin']);
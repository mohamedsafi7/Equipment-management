<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipmentController;

Route::get('/index', [EquipmentController::class, 'index'])->name('equipments.index');

// Show the form for creating a new equipment
Route::get('/equipments/create', [EquipmentController::class, 'create'])->name('equipments.create');

// Store a newly created equipment in storage
Route::post('/equipments', [EquipmentController::class, 'store'])->name('equipments.store');

// Display the specified equipment
Route::get('/equipments/{equipment}', [EquipmentController::class, 'show'])->name('equipments.show');

// Show the form for editing the specified equipment
Route::get('/equipments/{equipment}/edit', [EquipmentController::class, 'edit'])->name('equipments.edit');

// Update the specified equipment in storage
Route::put('/equipments/{equipment}', [EquipmentController::class, 'update'])->name('equipments.update');

// Remove the specified equipment from storage
Route::delete('/equipments/{equipment}', [EquipmentController::class, 'destroy'])->name('equipments.destroy');


// authentification

Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'registerUser']);
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/logout', [UserController::class, 'logoutUser'])->middleware(['auth:sanctum'])->name('logout');

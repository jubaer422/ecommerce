<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

// Default home page
Route::get('/', function () {
    return view('welcome'); // Or home.blade.php if you're using that
});

// Dashboard (only accessible after login & email verified)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard'); // Change this to 'home' if needed
    })->name('dashboard');

    // Profile routes (optional)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Load authentication routes (register, login, email verify, etc.)
require __DIR__.'/auth.php';

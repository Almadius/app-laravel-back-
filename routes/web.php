<?php

use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ThemeController::class, 'home'])->name('home');

Route::get('/contacts', [ThemeController::class, 'contacts'])->name('contacts');

Route::post('/set-theme', [ThemeController::class, 'setTheme'])->name('set_theme');

<?php

use App\Http\Controllers\Admin\Main\IndexController;
use App\Http\Controllers\Main\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', MainController::class);

// Админская страница

    Route::get('/admin', IndexController::class);
// Аутентификация
Auth::routes();

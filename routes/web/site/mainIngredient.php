<?php

use App\Http\Controllers\Site\MainIngredientController;
use Illuminate\Support\Facades\Route;

Route::get('/minh-bach-nguyen-lieu.html', [MainIngredientController::class, 'show'])->name('show');
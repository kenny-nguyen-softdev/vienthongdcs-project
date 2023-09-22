<?php

use App\Http\Controllers\Site\SecondSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/{secondSubCategorySlug}.html', [SecondSubCategoryController::class, 'index'])->name('index');

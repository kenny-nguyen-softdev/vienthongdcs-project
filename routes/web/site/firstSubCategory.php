<?php

use App\Http\Controllers\Site\FirstSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/{firstSubCategorySlug}.html', [FirstSubCategoryController::class, 'index'])->name('index');
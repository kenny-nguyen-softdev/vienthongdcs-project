<?php

use App\Http\Controllers\Site\HeaderPostController;
use Illuminate\Support\Facades\Route;

Route::get('/{headerPostSlug}.html', [HeaderPostController::class, 'show'])->name('show');
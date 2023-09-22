<?php

use App\Http\Controllers\Site\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/{postSlug}.html', [PostController::class, 'show'])->name('show');
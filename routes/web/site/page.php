<?php

use App\Http\Controllers\Site\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/{pageSlug}.html', [PageController::class, 'show'])->name('show');
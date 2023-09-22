<?php

use App\Http\Controllers\Site\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/{aboutSlug}.html', [AboutController::class, 'show'])->name('show');
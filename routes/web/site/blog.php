<?php

use App\Http\Controllers\Site\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/{blogSlug}.html', [BlogController::class, 'index'])->name('index');
<?php

use App\Http\Controllers\Site\CommitmentController;
use Illuminate\Support\Facades\Route;

Route::get('/{commitmentSlug}.html', [CommitmentController::class, 'show'])->name('show');
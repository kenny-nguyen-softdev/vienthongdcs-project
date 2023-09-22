<?php

use App\Http\Controllers\Site\ConsultantController;
use Illuminate\Support\Facades\Route;

Route::get('/ho-tro-tu-van-mien-phi.html', [ConsultantController::class, 'index'])->name('index');
Route::post('/ho-tro-tu-van-mien-phi.html', [ConsultantController::class, 'sendEmail'])->name('sendEmail');
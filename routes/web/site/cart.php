<?php

use App\Http\Controllers\Site\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/hien-thi.html', [CartController::class, 'show'])->name('show');

Route::post('/tao-moi.html', [CartController::class, 'create'])->name('create');

Route::put('/cap-nhat.html', [CartController::class, 'update'])->name('update');

Route::delete('/xoa.html', [CartController::class, 'destroy'])->name('destroy');
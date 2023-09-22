<?php

use App\Http\Controllers\Admin\ConfigController;
use Illuminate\Support\Facades\Route;

Route::get('/cau-hinh-chung', [ConfigController::class, 'index'])->name('index');
Route::put('/cau-hinh-chung/{config}', [ConfigController::class, 'update'])->name('update');
<?php

use App\Http\Controllers\Admin\CommitmentController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-cam-ket', [CommitmentController::class, 'index'])->name('index');

Route::get('/tao-moi', [CommitmentController::class, 'create'])->name('create');
Route::post('/tao-moi', [CommitmentController::class, 'store'])->name('store');


Route::get('/chinh-sua/{commitment}', [CommitmentController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{commitment}', [CommitmentController::class, 'update'])->name('update');

Route::delete('/xoa/{commitment}', [CommitmentController::class, 'destroy'])->name('destroy');

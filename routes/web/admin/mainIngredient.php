<?php

use App\Http\Controllers\Admin\MainIngredientController;
use Illuminate\Support\Facades\Route;

Route::get('/danh-sach-minh-bach-nguyen-lieu', [MainIngredientController::class, 'index'])->name('index');

Route::get('/tao-moi', [MainIngredientController::class, 'create'])->name('create');
Route::post('/tao-moi', [MainIngredientController::class, 'store'])->name('store');


Route::get('/chinh-sua/{mainIngredient}', [MainIngredientController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{mainIngredient}', [MainIngredientController::class, 'update'])->name('update');

Route::delete('/xoa/{mainIngredient}', [MainIngredientController::class, 'destroy'])->name('destroy');
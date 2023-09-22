<?php

use App\Http\Controllers\Admin\SecondSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách danh mục phụ 2']], function () {
    Route::get('/danh-sach-danh-muc-phu-2', [SecondSubCategoryController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm danh mục phụ 2']], function () {
    Route::get('/tao-moi', [SecondSubCategoryController::class, 'create'])->name('create');
    Route::post('/tao-moi', [SecondSubCategoryController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa danh mục phụ 2']], function () {
    Route::get('/chinh-sua/{secondSubCategory}', [SecondSubCategoryController::class, 'edit'])->name('edit');
    Route::put('/chinh-sua/{secondSubCategory}', [SecondSubCategoryController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa danh mục phụ 2']], function () {
    Route::delete('/xoa/{secondSubCategory}', [SecondSubCategoryController::class, 'destroy'])->name('destroy');
});

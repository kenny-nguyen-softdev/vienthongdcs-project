<?php

use App\Http\Controllers\Admin\FirstSubCategoryController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách danh mục phụ 1']], function () {
Route::get('/danh-sach-danh-muc-phu-1', [FirstSubCategoryController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm danh mục phụ 1']], function () {
Route::get('/tao-moi', [FirstSubCategoryController::class, 'create'])->name('create');
Route::post('/tao-moi', [FirstSubCategoryController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa danh mục phụ 1']], function () {
Route::get('/chinh-sua/{firstSubCategory}', [FirstSubCategoryController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{firstSubCategory}', [FirstSubCategoryController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa danh mục phụ 1']], function () {
Route::delete('/xoa/{firstSubCategory}', [FirstSubCategoryController::class, 'destroy'])->name('destroy');
});

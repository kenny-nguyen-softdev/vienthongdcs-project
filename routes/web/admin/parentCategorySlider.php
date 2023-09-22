<?php

use App\Http\Controllers\Admin\ParentCategorySliderController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách slider của danh mục chính']], function () {
Route::get('/danh-sach-slider-cua-danh-muc-chinh', [ParentCategorySliderController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm slider của danh mục chính']], function () {
Route::get('/tao-moi', [ParentCategorySliderController::class, 'create'])->name('create');
Route::post('/tao-moi', [ParentCategorySliderController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa slider của danh mục chính']], function () {
Route::get('/chinh-sua/{parentCategorySlider}', [ParentCategorySliderController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{parentCategorySlider}', [ParentCategorySliderController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa slider của danh mục chính']], function () {
Route::delete('/xoa/{parentCategorySlider}', [ParentCategorySliderController::class, 'destroy'])->name('destroy');
});

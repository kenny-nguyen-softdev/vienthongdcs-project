<?php

use App\Http\Controllers\Admin\IntroductionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách bài giối thiệu']], function () {
Route::get('/danh-sach-bai-gioi-thieu', [IntroductionController::class, 'index'])->name('index');
});

Route::group(['middleware' => ['permission:Thêm bài giối thiệu']], function () {
Route::get('/tao-moi', [IntroductionController::class, 'create'])->name('create');
Route::post('/tao-moi', [IntroductionController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa bài giối thiệu']], function () {
Route::get('/chinh-sua/{introduction}', [IntroductionController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{introduction}', [IntroductionController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa bài giối thiệu']], function () {
Route::delete('/xoa/{introduction}', [IntroductionController::class, 'destroy'])->name('destroy');
});

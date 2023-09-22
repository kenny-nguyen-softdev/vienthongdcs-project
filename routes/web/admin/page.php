<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Thêm các trang thông tin']], function () {
Route::get('/tao-moi', [PageController::class, 'create'])->name('create');
Route::post('/tao-moi', [PageController::class, 'store'])->name('store');
});

Route::group(['middleware' => ['permission:Chỉnh sửa các trang thông tin']], function () {
Route::get('/chinh-sua/{page}', [PageController::class, 'edit'])->name('edit');
Route::put('/chinh-sua/{page}', [PageController::class, 'update'])->name('update');
});

Route::group(['middleware' => ['permission:Xóa trang thông tin']], function () {
Route::delete('/xoa/{page}', [PageController::class, 'destroy'])->name('destroy');
});

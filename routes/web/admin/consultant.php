<?php

use App\Http\Controllers\Admin\ConsultantController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['permission:Hiển thị danh sách hỗ trợ tư vấn']], function () {
Route::get('/danh-sach-ho-tro-tu-van-mien-phi', [ConsultantController::class, 'index'])->name('index');
});
<?php

use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\QuanlybanController;
use App\Http\Controllers\ThucDonController;
use App\Models\QuanLyBan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//Thực đơn
Route::get('/thuc-don/data',[ThucDonController::class,'getData']);
//127.0.0.1:8000/api/thuc-don/data
Route::get('/thuc-don/chi-tiet/data/{id}',[ThucDonController::class,'getDataChiTiet']);
//127.0.0.1:8000/api/thuc-don/chi-tiet/data/{index}
Route::post('/thuc-don/them-moi',[ThucDonController::class,'addNew']);
Route::post('/thuc-don/xoa-mon-an/{id}',[ThucDonController::class,'deleteItem']);
Route::post('/thuc-don/sua-mon-an',[ThucDonController::class,'editItem']);


//Nhân viên
Route::Post('/nhan-vien/dang-ky',[NhanvienController::class,'register']);
Route::Post('/nhan-vien/dang-nhap',[NhanvienController::class,'login']);


//Khách hàng
Route::Post('/khach-hang/dang-ky',[KhachHangController::class,'register']);
Route::Post('/khach-hang/dang-nhap',[KhachHangController::class,'login']);


//Đặt bàn
Route::post('/ban/dat-ban',[QuanlybanController::class,'datBan']);
//gửi thông tin mã bàn, số điện thoại khách hàng (đăng kí tài khoản), thời gian đặt bàn
Route::post('/ban/huy-ban/{id}',[QuanlybanController::class,'huyban']);
//Truyền id là id của bàn
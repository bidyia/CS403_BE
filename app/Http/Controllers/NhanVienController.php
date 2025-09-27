<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NhanvienController extends Controller
{
    function register(Request $request)
    {
        nhanvien::create([
            'ten_nhan_vien'     => $request->ten_nhan_vien,
            'ngay_sinh'         => $request->ngay_sinh,
            'dia_chi'           => $request->dia_chi,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'mat_khau'          => bcrypt($request->mat_khau), //mã hóa mât khẩu
        ]);
        return response()->json(['message' => 'Đăng ký thành công']);
    }
    public function login(Request $request){
        $check = Auth::guard('nhan_vien')->attempt([
            'so_dien_thoai'=>$request->so_dien_thoai,
            'password'=>$request->mat_khau
        ]);
        if($check){
            $nhanvien = Auth::guard('nhan_vien')->user();
                return response()->json([
                    'message' => 'Đăng nhập thành công',
                    'status' =>true,
                    'key' => $nhanvien->create_token('key')->plainTextToken,
                    'ten_nhan_vien' => $nhanvien->ten_nhan_vien,
                ]);
            }else{
                return response()->json([
                    'message' => 'Đăng nhập không thành công',
                    'status' =>false,
                ]);
            }
        }
        
    }

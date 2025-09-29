<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function register(Request $request)
    {
        KhachHang::create([
            'avatar'             => $request->avatar,
            'ten_khach_hang'     => $request->ten_khach_hang,
            'ngay_sinh'          => $request->ngay_sinh,
            'dia_chi'            => $request->dia_chi,
            'so_dien_thoai'      => $request->so_dien_thoai,
            'mat_khau'           => bcrypt($request->mat_khau), //mã hóa mât khẩu
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đăng ký tài khoản thành công!',
        ]);
    }
    public function login(Request $request){
        $check = Auth::guard('khach_hang')->attempt([
            'so_dien_thoai'=>$request->so_dien_thoai,
            'password'=>$request->mat_khau
        ]);
        if($check){
             $khach_hang = Auth::guard('khach_hang')->user();
                return response()->json([
                    'message' => 'Đăng nhập thành công',
                    'status' =>true,
                    'key' => $khach_hang->createToken('key')->plainTextToken,
                    'ten_khach_hang' => $khach_hang->ten_khach_hang,
                    'id_khach_hang' => $khach_hang->id,
                ]);
        }else{
                return response()->json([
                    'message' => 'Đăng nhập không thành công',
                    'status' =>false,
                ]);
            }
    }
}

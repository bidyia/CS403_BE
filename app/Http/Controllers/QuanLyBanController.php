<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use App\Models\QuanLyBan;
use Illuminate\Http\Request;

class QuanLyBanController extends Controller
{
    public function datBan(Request $request)
    {
        $check = KhachHang::where('so_dien_thoai', $request->so_dien_thoai)->fist();
        $data = QuanLyBan::where('ma_ban', $request->ma_ban)->first();
        if ($check) {
            if ($data) {
                $data::update([
                    'id_khach_hang'     => $check->id,
                    'thoi_gian_dat_ban' => $request->thoi_gian_dat_ban,
                    'trang_thai'        => '1',
                ]);
                return response()->json([
                    'status' => true,
                    'message' => 'Đặt bàn thành công',
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'không tồn tại mã bàn',
                ]);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'không tồn tại khách hàng',
            ]);
        }
    }
    public function huyban($id)
    {
        $data = QuanLyBan::where('id', $id)->first();
        if ($data) {
            $data::update([
                'id_khach_hang'     => null,
                'thoi_gian_dat_ban' => null,
                'trang_thai'        => '0',
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Hủy bàn thành công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'không tồn tại mã bàn',
            ]);
        }
    }
}

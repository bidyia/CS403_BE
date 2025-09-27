<?php

namespace App\Http\Controllers;

use App\Models\GoiMon;
use App\Models\QuanLyBan;
use App\Models\ThucDon;
use Illuminate\Http\Request;

class GoiMonController extends Controller
{
    public function goiMon(Request $request)
    {
        $check = QuanLyBan::where('id', $request->id_ban_an)
                ->where('id_khach_hang', $request->id_khach_hang)
                ->where('trang_thai', '1')->first();
        if ($check) {
            GoiMon::create([
                'id_mon_an'     => $request->id_mon_an,
                'id_ban_an'     => $request->id_ban_an,
                'id_khach_hang' => $request->id_khach_hang,
                'so_luong'      => $request->so_luong,
                'ghi_chu'       => $request->ghi_chu,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Gọi món thành công',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Bàn chưa được đặt hoặc không tồn tại',
            ]);
        }
    }
    public function getDatabyIDBan($id_ban)
    {
        $data = ThucDon::join('goi_mons', 'thuc_dons.id', '=', 'goi_mons.id_mon_an')
                        ->where('goi_mons.id_ban_an', $id_ban)
                        ->select('thuc_dons.ten_mon_an', 'goi_mons.so_luong', 'goi_mons.ghi_chu')
                        ->get();
        if ($data) {
            return response()->json([
                'status' => true,
                'message' => 'Lấy dữ liệu thành công',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Không có dữ liệu',
            ]);
        }
    }
}

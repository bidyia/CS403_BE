<?php

namespace App\Http\Controllers;

use App\Models\ThucDon;
use Illuminate\Http\Request;

class ThucDonController extends Controller
{
    public function getData()
    {
        $data = ThucDon::get();
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }
    public function getDataChiTiet($id)
    {
        $data = ThucDon::select('the_loai_mon_ans.ten_the_loai','thuc_dons.id', 'thuc_dons.ten_mon_an', 'thuc_dons.hinh_anh', 'thuc_dons.mo_ta_ngan', 'thuc_dons.gia', 'thuc_dons.don_vi_tinh', 'thuc_dons.trang_thai')
                        ->join('the_loai_mon_ans', 'thuc_dons.id_the_loai','the_loai_mon_ans.id')
                        ->where('id_the_loai', $id)
                        ->get();
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }
    public function addNew(Request $request)
    {
        $newItem = ThucDon::create([
            'ten_mon_an'    => $request->ten_mon_an,
            'hinh_anh'      => $request->hinh_anh,
            'mo_ta_ngan'    => $request->mo_ta_ngan,
            'gia'           => $request->gia,
            'don_vi_tinh'   => $request->don_vi_tinh,
            'id_the_loai'   => $request->id_the_loai,
        ]);
        return response()->json([
            'status'    => true,
            'message'   => 'Tạo mới món ăn thành công!',
        ]);
    }
    public function deleteItem($id)
    {
        $data = ThucDon::where('id',$id)->first();
        if($data){
            $data->delete();
            return response()->json([
                'status'    => true,
                'message'   => 'Xóa món ăn thành công!',
            ]);
        }else{
            return response()->json([
                'status'  =>false,
                'message' => 'Đã có lỗi sảy ra!',
            ]);
        }
    }
    public function editItem(Request $request){
        $data = ThucDon::where('id',$request->id)->first();
        if($data){
            $data->ten_mon_an    = $request->ten_mon_an;
            $data->hinh_anh      = $request->hinh_anh;
            $data->mo_ta_ngan    = $request->mo_ta_ngan;
            $data->gia           = $request->gia;
            $data->don_vi_tinh   = $request->don_vi_tinh;
            $data->id_the_loai   = $request->id_the_loai;
            $data->trang_thai    = $request->trang_thai;
            $data->save();
            return response()->json([
                'status'    => true,
                'message'   => 'Cập nhật món ăn thành công!',
            ]);
        }else{
            return response()->json([
                'status'  =>false,
                'message' => 'Đã có lỗi sảy ra!',
            ]);
        }
    }
}

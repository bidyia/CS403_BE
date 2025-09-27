<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function addNew(Request $request)
  {
      $blog = Blog::create([
          'title'       => $request->title,
          'mo_ta_ngan'  => $request->mo_ta_ngan,
          'ngay_dang'   => $request->ngay_dang,
          'hinh_anh'    => $request->hinh_anh   ,
          'content'     => $request->content,
          'ghi_chu'     => $request->ghi_chu,
      ]);

      return response()->json([
            'message' => 'Blog created successfully',
            'status'    => true,
      ]);
  }
  public function getData()
  {
      $data = Blog::select('id', 'title', 'mo_ta_ngan', 'ngay_dang', 'hinh_anh', 'content', 'ghi_chu')
                      ->get();
      return response()->json([
          'status' => true,
          'data' => $data,
      ]);
  }
  public function delBlog($id)
  {
      $data = Blog::where('id',$id)->first();
      if($data){
          $data->delete();
          return response()->json([
              'status'    => true,
              'message'   => 'Xóa blog thành công!',
          ]);
      }else{
          return response()->json([
              'status'  =>false,
              'message' => 'Đã có lỗi sảy ra!',
          ]);
      }
  }
  public function updateBlog(Request $request)
  {
      $data = Blog::where('id',$request->id)->first();
      if($data){
          $data->update([
              'title'       => $request->title,
              'mo_ta_ngan'  => $request->mo_ta_ngan,
              'ngay_dang'   => $request->ngay_dang,
              'hinh_anh'    => $request->hinh_anh   ,
              'content'     => $request->content,
              'ghi_chu'     => $request->ghi_chu,
          ]);
          return response()->json([
              'status'    => true,
              'message'   => 'Cập nhật blog thành công!',
          ]);
      }else{
          return response()->json([
              'status'  =>false,
              'message' => 'Đã có lỗi sảy ra!',
          ]);
      }
  }
}

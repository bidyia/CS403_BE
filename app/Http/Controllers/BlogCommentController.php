<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
   public function addNewComment(Request $request)
   {
      //request có id_blog, id_khach_hang, comment
      $check  = BlogComment::create([
         'id_blog' => $request->id_blog,
         'id_khach_hang' => $request->id_khach_hang,
         'comment' => $request->comment,
      ]);
      if($check){
         return response()->json([
         'status' => true,
         'message' => 'Thêm bình luận thành công!',
      ]);
        }else{
             return response()->json([
                'status' => false,
                'message' => 'Thêm bình luận thất bại!',
             ]);
      }
     
   }
   public function getCommentByBlogId($id_blog)
   {
    //return tên khách hàng, avt, comment, 
    $data = BlogComment::select('blog_comments.comment','khach_hangs.ten_khach_hang','khach_hangs.avatar')
                        ->join('khach_hangs','blog_comments.id_khach_hang','khach_hangs.id')
                        ->where('blog_comments.id_blog',$id_blog)
                        ->get();
    IF($data){
        return response()->json([
            'status' => true,
            'data' => $data,
        ]);
    }else{
        return response()->json([
            'status' => false,
            'message' => 'Chưa có bình luận nào!',
        ]);
   }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuanLyBan extends Model
{
   use HasFactory;
    protected $table = 'quan_ly_bans';
    protected $fillable = [
        'so_cho_ngoi',
        'id_khach_hang',
        'thoi_gian_dat_ban',
        'trang_thai',
        'ghi_chu',
    ];
}

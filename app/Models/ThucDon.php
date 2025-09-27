<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThucDon extends Model
{
    use HasFactory;
    protected $table = 'thuc_dons';
    protected $fillable = [
        'ten_mon_an',
        'hinh_anh',
        'mo_ta_ngan',
        'gia',
        'don_vi_tinh',
        'id_the_loai',
        'trang_thai',
    ];
}

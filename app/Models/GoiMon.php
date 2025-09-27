<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoiMon extends Model
{
    use HasFactory;
    protected $table = 'goi_mons';
    protected $fillable = [
        'id_mon_an',
        'id_ban_an',
        'id_khach_hang',
        'so_luong',
        'ghi_chu',
        
    ];
}

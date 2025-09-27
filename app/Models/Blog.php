<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'mo_ta_ngan',
        'ngay_dang',
        'hinh_anh',
        'content',
        'ghi_chu'
    ];
}

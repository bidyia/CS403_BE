<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class nhanvien extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'nhanviens';

    protected $fillable = [
        'ten_nhan_vien',
        'ngay_sinh',
        'dia_chi',
        'so_dien_thoai',
        'mat_khau',
    ];    
}

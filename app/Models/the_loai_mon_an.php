<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class the_loai_mon_an extends Model
{
    use HasFactory;
    protected $table = 'the_loai_mon_ans';
    protected $fillable = [
        'ten_the_loai',
    ];
}

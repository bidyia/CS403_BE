<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheLoaiMonAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('the_loai_mon_ans')->delete();
        DB::table('the_loai_mon_ans')->truncate(); // Xóa dữ liệu cũ trước khi thêm mới
        DB::table('the_loai_mon_ans')->insert([
            [
                'ten_the_loai' => 'Khai vị',
            ],
            [
                'ten_the_loai' => 'Món chính',
            ],
            [
                'ten_the_loai' => 'Tráng miệng',
            ],
            [
                'ten_the_loai' => 'Đồ uống',
            ],
             [
                'ten_the_loai' => 'Đồ Chay',
            ],
        ]);     
    }  
}

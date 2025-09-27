<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QLyBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quan_ly_bans')->delete();
        DB::table('quan_ly_bans')->truncate(); // Xóa dữ liệu cũ trước khi thêm mới
        DB::table('quan_ly_bans')->insert([
            ['so_cho_ngoi' => 2],
            ['so_cho_ngoi' => 2],
            ['so_cho_ngoi' => 2],

            ['so_cho_ngoi' => 5],
            ['so_cho_ngoi' => 5],
            ['so_cho_ngoi' => 5],

            ['so_cho_ngoi' => 8],
            ['so_cho_ngoi' => 8],
            ['so_cho_ngoi' => 8],
            ['so_cho_ngoi' => 8],

            ['so_cho_ngoi' => 10],
            ['so_cho_ngoi' => 10],
            ['so_cho_ngoi' => 10],
            ['so_cho_ngoi' => 10],
        ]);
    }
}

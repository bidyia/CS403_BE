<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThucDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thuc_dons')->delete();
        DB::table('thuc_dons')->truncate(); // Xóa dữ liệu cũ trước khi thêm mới
        DB::table('thuc_dons')->insert([

            // ===== Khai Vị (id_the_loai = 1) =====
            ['ten_mon_an' => 'Gỏi Cuốn', 'hinh_anh' => 'goicuon.hinhanh', 'mo_ta_ngan' => 'Gỏi cuốn tôm thịt chấm nước mắm pha.', 'gia' => 35000, 'don_vi_tinh' => 'phần (4 cuốn)', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Chả Giò', 'hinh_anh' => 'chagio.hinhanh', 'mo_ta_ngan' => 'Chả giò chiên giòn, nhân thịt heo và rau củ.', 'gia' => 40000, 'don_vi_tinh' => 'phần (6 cái)', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Salad Rau Trộn', 'hinh_anh' => 'saladrautron.hinhanh', 'mo_ta_ngan' => 'Salad tươi ngon với sốt mè rang.', 'gia' => 45000, 'don_vi_tinh' => 'đĩa', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Súp Ngô Gà', 'hinh_anh' => 'supngoga.hinhanh', 'mo_ta_ngan' => 'Súp bắp ngọt nấu thịt gà.', 'gia' => 30000, 'don_vi_tinh' => 'chén', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Súp Hải Sản', 'hinh_anh' => 'suphaisan.hinhanh', 'mo_ta_ngan' => 'Súp hải sản chua cay.', 'gia' => 50000, 'don_vi_tinh' => 'chén', 'id_the_loai' => 1],

            // ===== Món Chính (id_the_loai = 2) =====
            ['ten_mon_an' => 'Phở Bò', 'hinh_anh' => 'phobo.hinhanh', 'mo_ta_ngan' => 'Phở bò truyền thống, nước dùng đậm đà.', 'gia' => 50000, 'don_vi_tinh' => 'bát', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Cơm Tấm Sườn', 'hinh_anh' => 'comtamsuon.hinhanh', 'mo_ta_ngan' => 'Cơm tấm sườn nướng, bì chả.', 'gia' => 55000, 'don_vi_tinh' => 'đĩa', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Bún Chả', 'hinh_anh' => 'buncha.hinhanh', 'mo_ta_ngan' => 'Bún chả Hà Nội thơm ngon.', 'gia' => 45000, 'don_vi_tinh' => 'suất', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Sushi Cá Hồi', 'hinh_anh' => 'sushicahoi.hinhanh', 'mo_ta_ngan' => 'Sushi cá hồi tươi ngon.', 'gia' => 150000, 'don_vi_tinh' => 'phần (8 miếng)', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Ramen Nhật Bản', 'hinh_anh' => 'ramennhatban.hinhanh', 'mo_ta_ngan' => 'Mì ramen đậm vị Nhật Bản.', 'gia' => 120000, 'don_vi_tinh' => 'tô', 'id_the_loai' => 2],

            // ===== Món Tráng Miệng (id_the_loai = 3) =====
            ['ten_mon_an' => 'Kem Dâu', 'hinh_anh' => 'kemdau.hinhanh', 'mo_ta_ngan' => 'Kem vị dâu mát lạnh.', 'gia' => 25000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Bánh Flan', 'hinh_anh' => 'banhflan.hinhanh', 'mo_ta_ngan' => 'Bánh flan caramel ngọt ngào.', 'gia' => 20000, 'don_vi_tinh' => 'cái', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Chè Ba Màu', 'hinh_anh' => 'chebamau.hinhanh', 'mo_ta_ngan' => 'Chè ba màu Việt Nam.', 'gia' => 30000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Tiramisu', 'hinh_anh' => 'tiramisu.hinhanh', 'mo_ta_ngan' => 'Bánh tiramisu Ý.', 'gia' => 60000, 'don_vi_tinh' => 'miếng', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Cheesecake', 'hinh_anh' => 'cheesecake.hinhanh', 'mo_ta_ngan' => 'Bánh phô mai béo ngậy.', 'gia' => 65000, 'don_vi_tinh' => 'miếng', 'id_the_loai' => 3],

            // ===== Đồ Uống (id_the_loai = 4) =====
            ['ten_mon_an' => 'Trà Đào Cam Sả', 'hinh_anh' => 'tradaocamsa.hinhanh', 'mo_ta_ngan' => 'Trà đào cam sả mát lạnh.', 'gia' => 40000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Trà Sữa Trân Châu', 'hinh_anh' => 'trasuatrancha.u.hinhanh', 'mo_ta_ngan' => 'Trà sữa ngọt ngào với trân châu.', 'gia' => 45000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Sinh Tố Bơ', 'hinh_anh' => 'sinhtobo.hinhanh', 'mo_ta_ngan' => 'Sinh tố bơ sữa đặc.', 'gia' => 50000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Cà Phê Sữa Đá', 'hinh_anh' => 'caphesuada.hinhanh', 'mo_ta_ngan' => 'Cà phê sữa đá Việt Nam.', 'gia' => 30000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Nước Cam Ép', 'hinh_anh' => 'nuoccamep.hinhanh', 'mo_ta_ngan' => 'Nước cam ép nguyên chất.', 'gia' => 35000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],

            // ===== Đồ Chay (id_the_loai = 5) =====
            ['ten_mon_an' => 'Cơm Chay Thập Cẩm', 'hinh_anh' => 'comchaythapcam.hinhanh', 'mo_ta_ngan' => 'Cơm chay với nhiều món rau củ.', 'gia' => 60000, 'don_vi_tinh' => 'suất', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Bún Riêu Chay', 'hinh_anh' => 'bunrieuchay.hinhanh', 'mo_ta_ngan' => 'Bún riêu nấu từ rau củ.', 'gia' => 50000, 'don_vi_tinh' => 'tô', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Lẩu Nấm Chay', 'hinh_anh' => 'launamchay.hinhanh', 'mo_ta_ngan' => 'Lẩu nấm thanh đạm.', 'gia' => 120000, 'don_vi_tinh' => 'nồi', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Đậu Hũ Kho Chay', 'hinh_anh' => 'dauhukhochay.hinhanh', 'mo_ta_ngan' => 'Đậu hũ kho nước tương.', 'gia' => 45000, 'don_vi_tinh' => 'đĩa', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Canh Rau Củ', 'hinh_anh' => 'canhraucu.hinhanh', 'mo_ta_ngan' => 'Canh rau củ thanh mát.', 'gia' => 40000, 'don_vi_tinh' => 'tô', 'id_the_loai' => 5],
        ]);
    }
}

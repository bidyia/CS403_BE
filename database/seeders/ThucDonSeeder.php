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
            ['ten_mon_an' => 'Gỏi Cuốn', 'hinh_anh' => 'https://www.cet.edu.vn/wp-content/uploads/2018/11/goi-cuon-tom-thit.jpg', 'mo_ta_ngan' => 'Gỏi cuốn tôm thịt chấm nước mắm pha.', 'gia' => 35000, 'don_vi_tinh' => 'phần (4 cuốn)', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Chả Giò', 'hinh_anh' => 'https://th.bing.com/th/id/R.944d7ecb9fa395f259ffdc2aec2b97a1?rik=fqRMBrMZ5J7CAQ&riu=http%3a%2f%2fcdn.tgdd.vn%2fFiles%2f2022%2f12%2f13%2f1495224%2fcach-lam-cha-gio-hai-san-trung-bac-thao-la-mieng-nham-nhi-cuoi-tuan-202212131038328678.jpg&ehk=Xun5QTJQYNU7nEIkdgdX0HdFtX%2feUVGzlJqqXRgtDoM%3d&risl=&pid=ImgRaw&r=0', 'mo_ta_ngan' => 'Chả giò chiên giòn, nhân thịt heo và rau củ.', 'gia' => 40000, 'don_vi_tinh' => 'phần (6 cái)', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Salad Rau Trộn', 'hinh_anh' => 'https://bepxua.vn/wp-content/uploads/2021/01/cach-lam-salad-rau-tron-don-gian.jpg', 'mo_ta_ngan' => 'Salad tươi ngon với sốt mè rang.', 'gia' => 45000, 'don_vi_tinh' => 'đĩa', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Súp Ngô Gà', 'hinh_anh' => 'https://th.bing.com/th/id/R.5a39ea2d8b96f7349a410807d0cda106?rik=z3pWRAIXAQ2g6w&riu=http%3a%2f%2fcdn.tgdd.vn%2fFiles%2f2021%2f08%2f05%2f1373270%2fcach-nau-sup-ga-ngo-non-thom-ngon-bo-duong-202201141412125884.jpg&ehk=0e3qviwyKm1f1CM2PJwDOTis9p8MFcwzmlcJUuax7mM%3d&risl=&pid=ImgRaw&r=0', 'mo_ta_ngan' => 'Súp bắp ngọt nấu thịt gà.', 'gia' => 30000, 'don_vi_tinh' => 'chén', 'id_the_loai' => 1],
            ['ten_mon_an' => 'Súp Hải Sản', 'hinh_anh' => 'https://menungoido.com/wp-content/uploads/2021/12/z2991694372287_29eefedba7c64dc9df38fbc6b53a7597-2048x1408.jpg', 'mo_ta_ngan' => 'Súp hải sản chua cay.', 'gia' => 50000, 'don_vi_tinh' => 'chén', 'id_the_loai' => 1],

            // ===== Món Chính (id_the_loai = 2) =====
            ['ten_mon_an' => 'Phở Bò', 'hinh_anh' => 'https://cdn.tgdd.vn/2020/11/CookProduct/pho-bo-thumbnail-1200x676.jpg', 'mo_ta_ngan' => 'Phở bò truyền thống, nước dùng đậm đà.', 'gia' => 50000, 'don_vi_tinh' => 'bát', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Cơm Tấm Sườn', 'hinh_anh' => 'https://i.ytimg.com/vi/cJu6tFJe_Gc/maxresdefault.jpg', 'mo_ta_ngan' => 'Cơm tấm sườn nướng, bì chả.', 'gia' => 55000, 'don_vi_tinh' => 'đĩa', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Bún Chả', 'hinh_anh' => 'https://cdn.tgdd.vn/Files/2017/04/12/971481/cach-lam-bun-cha-ha-noi-truyen-thong-202112211431417496.jpg', 'mo_ta_ngan' => 'Bún chả Hà Nội thơm ngon.', 'gia' => 45000, 'don_vi_tinh' => 'suất', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Sushi Cá Hồi', 'hinh_anh' => 'https://tse2.mm.bing.net/th/id/OIP.z6hxMRbftyskvS8-wq-8ggHaE8?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Sushi cá hồi tươi ngon.', 'gia' => 150000, 'don_vi_tinh' => 'phần (8 miếng)', 'id_the_loai' => 2],
            ['ten_mon_an' => 'Ramen Nhật Bản', 'hinh_anh' => 'https://th.bing.com/th/id/R.a45cc4614813e76c07a448cc0fd8bbd2?rik=iRRGrSrDsWERNg&riu=http%3a%2f%2fdaiichiramen.vn%2fwp-content%2fuploads%2f2022%2f07%2fdaiichi-ramen-1-1.jpg&ehk=1M0CAvRneai%2bXb%2fzE0n9BLjTahwUBTnc8f1tCZiTy58%3d&risl=&pid=ImgRaw&r=0', 'mo_ta_ngan' => 'Mì ramen đậm vị Nhật Bản.', 'gia' => 120000, 'don_vi_tinh' => 'tô', 'id_the_loai' => 2],

            // ===== Món Tráng Miệng (id_the_loai = 3) =====
            ['ten_mon_an' => 'Kem Dâu', 'hinh_anh' => 'https://th.bing.com/th/id/R.5cbc51d98d3ac81af65ded76b81f3fa8?rik=Uzh4qyPggyCEKg&riu=http%3a%2f%2f2sao.vietnamnetjsc.vn%2fimages%2f2017%2f11%2f10%2f15%2f52%2fkem-dau-tay.jpg&ehk=07ZxCAUR3bDSgsZgYlKOObT%2fk1ybAHmzBDWpFtZ%2fzTw%3d&risl=&pid=ImgRaw&r=0', 'mo_ta_ngan' => 'Kem vị dâu mát lạnh.', 'gia' => 25000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Bánh Flan', 'hinh_anh' => 'https://tiki.vn/blog/wp-content/uploads/2023/02/cach-lam-banh-flan-thumbnail.jpg', 'mo_ta_ngan' => 'Bánh flan caramel ngọt ngào.', 'gia' => 20000, 'don_vi_tinh' => 'cái', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Chè Ba Màu', 'hinh_anh' => 'https://www.simplyrecipes.com/thmb/wf5U6XcbZeHGpr6avp2-hnluvkE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Che-Ba-Mau-METHOD-6b-f4e8dbacc53f4a4e994d748f7e547c89.jpg', 'mo_ta_ngan' => 'Chè ba màu Việt Nam.', 'gia' => 30000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Tiramisu', 'hinh_anh' => 'https://tse4.mm.bing.net/th/id/OIP.xrGD9p82792QaXPwXUIe3gHaE7?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Bánh tiramisu Ý.', 'gia' => 60000, 'don_vi_tinh' => 'miếng', 'id_the_loai' => 3],
            ['ten_mon_an' => 'Cheesecake', 'hinh_anh' => 'https://tse2.mm.bing.net/th/id/OIP.edi5G03W2Qr6NrryIjv81gHaHa?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Bánh phô mai béo ngậy.', 'gia' => 65000, 'don_vi_tinh' => 'miếng', 'id_the_loai' => 3],

            // ===== Đồ Uống (id_the_loai = 4) =====
            ['ten_mon_an' => 'Trà Đào Cam Sả', 'hinh_anh' => 'https://media.saigontourist.edu.vn/Media/1_STHCHOME/FolderFunc/202305/Images/thanh-pham-tra-dao-cam-sa-20230529045238-e.jpg', 'mo_ta_ngan' => 'Trà đào cam sả mát lạnh.', 'gia' => 40000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Trà Sữa Trân Châu', 'hinh_anh' => 'https://tse4.mm.bing.net/th/id/OIP.7RTe34P0sTEgERSKLZwWmwHaE8?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Trà sữa ngọt ngào với trân châu.', 'gia' => 45000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Sinh Tố Bơ', 'hinh_anh' => 'https://tse4.mm.bing.net/th/id/OIP.TuXIgRyrQmy2Sis4rROUogHaE9?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Sinh tố bơ sữa đặc.', 'gia' => 50000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Cà Phê Sữa Đá', 'hinh_anh' => 'https://giacaphe.com/wp-content/uploads/2023/03/ca-phe-sua-da-2.jpg', 'mo_ta_ngan' => 'Cà phê sữa đá Việt Nam.', 'gia' => 30000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],
            ['ten_mon_an' => 'Nước Cam Ép', 'hinh_anh' => 'https://topmonan.edu.vn/wp-content/uploads/2021/07/Cach-lam-nuoc-cam-ep-ngon-va-thom-ket-hop-voi-le-va-gung-5.jpg', 'mo_ta_ngan' => 'Nước cam ép nguyên chất.', 'gia' => 35000, 'don_vi_tinh' => 'ly', 'id_the_loai' => 4],

            // ===== Đồ Chay (id_the_loai = 5) =====
            ['ten_mon_an' => 'Cơm Chay Thập Cẩm', 'hinh_anh' => 'https://amthucdochay.com/wp-content/uploads/2021/08/com-rang-thap-cam-chay.jpg', 'mo_ta_ngan' => 'Cơm chay với nhiều món rau củ.', 'gia' => 60000, 'don_vi_tinh' => 'suất', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Bún Riêu Chay', 'hinh_anh' => 'https://tse1.mm.bing.net/th/id/OIP.f86ScKPghw1U8ym7JYoxpQHaFj?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Bún riêu nấu từ rau củ.', 'gia' => 50000, 'don_vi_tinh' => 'tô', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Lẩu Nấm Chay', 'hinh_anh' => 'https://tse4.mm.bing.net/th/id/OIP.rQmPczr1cyvQINvXaKKyqgHaD0?rs=1&pid=ImgDetMain&o=7&rm=3', 'mo_ta_ngan' => 'Lẩu nấm thanh đạm.', 'gia' => 120000, 'don_vi_tinh' => 'nồi', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Đậu Hũ Kho Chay', 'hinh_anh' => 'https://cdn.tgdd.vn/2020/09/CookProduct/2-cach-lam-nam-rom-kho-dau-hu-va-kho-chao-bat-com-thom-ngon1-1200x676.jpg', 'mo_ta_ngan' => 'Đậu hũ kho nước tương.', 'gia' => 45000, 'don_vi_tinh' => 'đĩa', 'id_the_loai' => 5],
            ['ten_mon_an' => 'Canh Rau Củ', 'hinh_anh' => 'https://img-global.cpcdn.com/005_recipes/20d08f8b1203d66c/1200x630cq70/photo.jpg', 'mo_ta_ngan' => 'Canh rau củ thanh mát.', 'gia' => 40000, 'don_vi_tinh' => 'tô', 'id_the_loai' => 5],
        ]);
    }
}

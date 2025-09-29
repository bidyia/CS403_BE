<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->delete();
        DB::table('blogs')->truncate(); // Xóa dữ liệu cũ trước khi thêm
        DB::table('blogs')->insert([
            [
                'title'      => 'Phở Hà Nội - Hương vị truyền thống Việt Nam',
                'mo_ta_ngan' => 'Phở Hà Nội là món ăn biểu tượng của ẩm thực Việt Nam, mang trong mình sự tinh tế và hồn cốt dân tộc.',
                'ngay_dang'  => '2025-09-28',
                'hinh_anh'   => 'https://cdn.tgdd.vn/2020/11/CookProduct/pho-bo-thumbnail-1200x676.jpg',
                'content'    => "Phở Hà Nội từ lâu đã trở thành niềm tự hào của người Việt. Nước dùng trong, ngọt thanh được ninh kỹ từ xương bò, kết hợp cùng quế, hồi, gừng nướng, hành khô tạo nên một hương vị vừa đậm đà vừa tinh tế. Bánh phở mềm, thịt bò thái mỏng cùng chút hành lá, rau thơm khiến thực khách khó có thể quên. 

Không chỉ đơn thuần là món ăn, phở còn gắn liền với đời sống thường nhật của người Việt, từ bữa sáng bình dân nơi vỉa hè cho tới món ăn đãi khách quý. Nhiều người nói, nếu đến Việt Nam mà chưa thử phở, thì coi như chuyến đi chưa trọn vẹn. 

Ngày nay, phở Hà Nội không chỉ phổ biến trong nước mà còn vang danh khắp thế giới. Những quán phở tại Mỹ, Pháp, Úc... luôn thu hút đông đảo thực khách quốc tế, biến phở trở thành cầu nối văn hóa và ẩm thực giữa Việt Nam và bạn bè năm châu."
            ],
            [
                'title'      => 'Pizza Ý - Sự kết hợp hoàn hảo của phô mai và sốt cà chua',
                'mo_ta_ngan' => 'Pizza Ý là một trong những món ăn toàn cầu, nổi tiếng với hương vị phong phú và đa dạng topping.',
                'ngay_dang'  => '2025-09-28',
                'hinh_anh'   => 'https://balodeplao.com/wp-content/uploads/2015/04/pizza-900x566.jpg',
                'content'    => "Pizza xuất phát từ Naples, Ý, và nhanh chóng trở thành món ăn được yêu thích ở khắp mọi nơi. Lớp đế bánh mỏng giòn, kết hợp với sốt cà chua tươi và phô mai Mozzarella béo ngậy, tạo nên hương vị khó cưỡng. Người Ý coi pizza không chỉ là món ăn, mà còn là một phần quan trọng trong văn hóa ẩm thực của họ. 

Ngày nay, pizza được biến tấu với nhiều loại topping khác nhau: hải sản tươi ngon, xúc xích cay nồng, rau củ thanh mát hay thậm chí là trái cây ngọt ngào. Chính sự sáng tạo này đã khiến pizza phù hợp với khẩu vị đa dạng của thực khách trên toàn thế giới. 

Dù ở New York, Tokyo hay Hà Nội, pizza vẫn giữ được sức hấp dẫn đặc biệt, luôn là lựa chọn yêu thích cho các buổi tụ tập bạn bè, gia đình và cả những dịp đặc biệt."
            ],
               [
                'title'      => 'Sushi Nhật Bản - Tinh hoa ẩm thực xứ hoa anh đào',
                'mo_ta_ngan' => 'Sushi là món ăn thanh tao, kết hợp giữa cơm dẻo, hải sản tươi sống và nghệ thuật chế biến tinh tế.',
                'ngay_dang'  => '2025-09-28',
                'hinh_anh'   => 'https://tse2.mm.bing.net/th/id/OIP.z6hxMRbftyskvS8-wq-8ggHaE8?rs=1&pid=ImgDetMain&o=7&rm=3',
                'content'    => "Sushi không chỉ là một món ăn, mà còn là biểu tượng văn hóa của Nhật Bản. Mỗi miếng sushi được làm từ cơm dẻo trộn giấm, kết hợp với cá sống hoặc hải sản tươi, được cuộn cùng rong biển. Người Nhật coi sushi như một tác phẩm nghệ thuật, nơi mà sự cân bằng giữa hương vị, màu sắc và cách trình bày đều được coi trọng. 

Ngày nay, sushi đã trở nên phổ biến toàn cầu với nhiều biến tấu khác nhau, từ sushi truyền thống cho đến những phiên bản hiện đại như sushi cuộn California. Tuy vậy, giá trị cốt lõi của sushi vẫn là sự tươi ngon của nguyên liệu và bàn tay khéo léo của người đầu bếp. 

Đối với thực khách quốc tế, thưởng thức sushi là trải nghiệm không thể bỏ qua khi đặt chân đến Nhật Bản, một hành trình khám phá sự tinh tế của nền ẩm thực Đông Á."
            ],
            [
                'title'      => 'Bánh Croissant - Biểu tượng ngọt ngào của nước Pháp',
                'mo_ta_ngan' => 'Croissant là loại bánh ngàn lớp, thơm mùi bơ, giòn tan bên ngoài nhưng mềm mại bên trong.',
                'ngay_dang'  => '2025-09-28',
                'hinh_anh'   => 'https://th.bing.com/th/id/R.9209027b18bfa74d93d3cc4d3c3d94f8?rik=d4erH7CXHt6Hog&pid=ImgRaw&r=0',
                'content'    => "Croissant là loại bánh mì ngọt nổi tiếng có nguồn gốc từ nước Pháp. Với hình dáng trăng lưỡi liềm đặc trưng, croissant thường được làm từ bột mì, men, bơ và sữa, trải qua quá trình gấp lớp nhiều lần để tạo thành kết cấu giòn xốp hấp dẫn. Mỗi miếng bánh mang đến hương vị béo ngậy và thơm lừng mùi bơ. 

Người Pháp thường thưởng thức croissant cùng một ly cà phê hoặc sô-cô-la nóng vào buổi sáng. Đây được coi là hình ảnh quen thuộc trong văn hóa ẩm thực Pháp, gợi nhắc về nhịp sống thư thả và tinh tế của đất nước này. 

Ngày nay, croissant đã phổ biến trên toàn thế giới, được biến tấu với nhiều nhân khác nhau như socola, hạnh nhân, phô mai hay jambon, trở thành món ăn sáng yêu thích của hàng triệu người."
            ],
        ]);
    }
}

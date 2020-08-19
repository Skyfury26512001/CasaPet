<?php

use App\Pet;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Pet::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Pet::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }
        $pets = array(
            array('Slug' => md5("admin"."1257"),
                'Name' => 'Chó Phốc sóc',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Chó Phốc sóc (Pomeranian) là giống chó cảnh có nguồn gốc từ châu Âu.
                Tên của chúng bắt nguồn từ địa danh Pomerania, trước là vùng Trung Âu, ngày nay là miền
                Tây Bắc Ba Lan và Đông Bắc Đức.
                Phốc Sóc được biết đến rộng rãi ở Anh vào năm 1761, tại lễ cưới Vua George,
                Hoàng Hậu Charlotte đã mang chú chó cưng của mình đi cùng. Sau này nữ hoàng Victoria
                tiếp tục lai tạo với các giống chó nhập từ Châu Âu khác, cho ra giống Phốc Sóc có kích thước
                nhỏ và màu lông đa dạng như hiện nay.
                Đặc điểm ngoại hình chó phốc sóc
                Kích thước: Chó Phốc Sóc được xếp vào kích thước toy (giống chó nhỏ cao dưới 25cm) với chiều cao
                từ 15 – 25cm, nặng khoảng từ 2 – 4kg. Một số cá thể Pomeranian có thể cao 35cm và nặng 8kg nhưng
                dòng này ít được yêu thích và chỉ xuất hiện ở châu Âu.
                Lông: Bộ lông của chó Pom dài và mềm mượt được chia thành 2 lớp giống như chó Alaska,
                Samoyed hay Husky. Ban đầu Pomeranian chỉ có màu trắng nhưng quá trình cải tạo giống
                đã làm lông của chó Phốc đa dạng màu sắc hơn như: Xám khói, vàng lửa, bò sữa, xám xanh…
                Đầu: Khuôn mặt của giống chó Pomeranian rất giống cáo với mõm nhỏ, dài, đôi mắt to và sáng,
                thể hiện sự tinh khôn. Vào năm 2000 còn có chó Phóc Sóc mặt tròn, mõm ngắn xuất hiện tại Mỹ
                và được gọi là Pom mặt gấu.',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó Phốc',
                'Thumbnails' => '',
                'Age' => '4',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."157"),
                'Name' => 'Chó Chihuahua',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Tên của chú chó Chihuahua được đặt theo tên của bang Chihuahua ở Mexico
                và đây cũng là giống chó lâu đời nhất ở Bắc Mỹ. Giống chó này được nhiều người yêu thích
                bởi sự nhỏ nhắn dễ thương và sự thông minh nhanh nhẹn của chúng.
                 Đặc biệt, giống chó này còn khiến nhiều người tò mò bởi những sự thật không phải ai cũng biết về chúng.
                 Đặc điểm ngoại hình
                 Chihuahua là giống chó có thân hình nhỏ bé nhất thế giới: cân nặng của chúng chỉ đạt khoảng 0,5kg
                 và có chiều cao dưới 23cm
                 Chihuahua là giống chó lâu đời nhất ở Bắc Mỹ
                 Bộ não của Chihuahua không hề nhỏ bé như thân hình của nó
                 Chihuahua có bất kỳ màu lông nào cũng được
                 Chihuahua từng là một con vật linh thiêng
                 Chihuahua không thích làm thân với bất kỳ giống chó nào khác trừ đồng loại của mình
                 Chihuahua là con vật chỉ trung thành với một chủ duy nhất
                 Vào năm 1977 thì giống chó Chihuahua đã trở thành biểu tượng cho văn hóa nhạc Pop.
                 Cụ thể là có một chú chó có tên là Gidget đã xuất hiện trong một đoạn quảng cáo của hãng Taco Bell.
                 Nhiều người đã bày tỏ sự thích thú với chú chó này và cũng bắt đầu từ đây mà Chihuahua xuất hiện
                 nhiều hơn ở các bộ phim, chương trình truyền hình.
                 Chihuahua dù sở hữu kích thước nhỏ bé, hơi gầy nhưng chúng lại có tuổi thọ khá cao, từ 10 - 18 năm
                 do sức đề kháng tốt và ít mắc bệnh.',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chihuahua',
                'Thumbnails' => '',
                'Age' => '2',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."12357"),
                'Name' => 'Chó Pug',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Chó Pug mặt xệ xuất hiện từ khá lâu rồi. Nguồn gốc xuất xứ của chúng đến nay
                vẫn chưa có câu trả lời chính xác. Khả năng cao nhất, chó Pug đã có mặt từ thời nhà Hán – Trung Quốc
                vào khoảng năm 200 TCN. Khi ấy, Pug được coi là giống chó quý tộc, có cuộc sống xa hoa do chủ yếu
                được nuôi bởi hoàng thân, quốc thích Trung Quốc.
                Đặc điểm ngoại hình
                Giống chó Pug sở hữu một bộ mặt nhăn nheo, đuôi xoăn và mõm ngắn.
                Đôi mắt tròn và lồi có màu đen sẫm, phía dưới của hàm xệ xuống nhìn rất đáng yêu.
                Chúng có những bộ lông ngắn rất mịn, mền, bóng và có nhiều màu sắc (Được vuốt ve
                chúng sẽ tạo cảm giác rất dễ chịu). Tuy nhiên thì hiện nay phổ biến nhất là 2 màu đen – trắng.
                Cơ thể chúng khá ngắn, gọn gàng, cảm giác như 1 cục thịt tròn vậy.
                Chiều cao từ chân đến vai gần tương đương với độ dài từ hông đến vai.
                Có Cân nặng khoảng 6-8kg và độ cao là 26-42cm',
                'SpeciesSort' => 'Chó',
                'Species' => 'Pug',
                'Thumbnails' => '',
                'Age' => '5',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."457"),
                'Name' => 'Chó Bắc Kinh',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Chó Bắc Kinh là tên một loài chó có nguồn gốc xuất thân từ Trung Quốc.
                Theo truyền thuyết, chó Bắc Kinh được giới quý tộc Hoàng Gia Trung Quốc rất ưa chuộng.
                Chúng được tôn thờ như vị thần thánh, có khả năng mang đến may mắn và xua đuổi những vận đen đủi
                cho con người. Thậm chí những người dân thường, không phải tầng lớp quý tộc đi qua còn phải lễ phép
                cúi chào chó Bắc Kinh. Hồi đó giống chó này giá rất đắt, nếu như có ai ăn trộm hoặc đối xử tệ bạc
                với chúng sẽ bị hành hình nghiêm khắc. Vào những năm 1860, khi Anh tiến vào xâm chiếm cung điện
                Hoàng gia Trung Hoa, những chú chó Bắc Kinh được người Trung ra lệnh tiêu huỷ để không
                rơi vào tay kẻ địch. Tuy nhiên một vài chú chó Bắc Kinh đã sống sót và được đưa trở về nước Anh.
                Năm 1893, chó Bắc Kinh xuất hiện tại rất nhiều các cuộc triển lãm tại Anh Quốc.
                Từ đó đến nay, giống chó này được nhân giống và phổ biến rộng rãi trên toàn quốc.
                Đặc điểm ngoại hình
                Nhìn bao quát, chó Bắc Kinh sở hữu một thân hình nhỏ nhắn nhưng vô cùng săn chắc, khoẻ khoắn.
                Chiều dài với chiều cao cơ thể xấp xỉ bằng nhau nên trông chúng khá mũm mĩm.
                Chiếc đầu có kích thước to hơn so với tỉ lệ cơ thể. Mõm bè ra phía trước, trông khá lộ phần mặt gãy.
                Chó Bắc Kinh có một chiếc mũi rất thính màu đen nháy. Đôi mắt to như hột nhãn.
                Hai tai hình trái tim rủ xuống. Cổ to, ngắn, đôi chân chắc khỏe cùng với cái đuôi dài xù lông trông
                rất đáng yêu. Thân hình khá nhỏ nhắn nhưng chó Bắc Kinh sở hữu bộ lông dày dặn nên trông cơ thể
                chúng giống hình chữ nhật.
                Bộ lông của chó Bắc Kinh được chia thành nhiều lớp. Lớp bên ngoài lông dài và rậm, hơi thô.
                Nhưng lớp lông bên trong lại rất mềm mượt.  Giống chó này thường có màu lông phổ biến nhất là màu trắng.
                Có nhiều con pha giữa màu trắng và vàng nâu.
                Kích thước chuẩn của một chú chó Bắc Kinh là:
                Từ 2-4 tháng tuổi: nặng khoảng 1-6 kg và cao từ 13-23 cm.
                Con trưởng thành: nặng 9-12 kg, cao khoảng 15-25 cm.
                Chó Bắc Kinh có thể sống được từ 10 đến 15 năm. Trong điều kiện nuôi dưỡng tốt, chúng có thể sống lâu
                được thêm từ 2-3 năm nữa.
                ',
                'SpeciesSort' => 'Chó',
                'Species' => 'Bắc Kinh',
                'Thumbnails' => '',
                'Age' => '3',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123"),
                'Name' => 'Chó Boston',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Chó Boston Terrier hay còn được gọi là chó sục Boston, Bò mộng Boston, Boxwood
                hay chó Bull Boston. Nó có xuất xứ từ vùng Boston, Massachusetts. Được nhân giống nhỏ đi từ các
                giống chó chọi của dòng Bull và Terrier ( chó sục), Boston Terrier ban đầu có trọng lượng khoảng 20kg
                còn được gọi là Olde Boston Bulldogge. Chó Boston được cho là giống chó gan lỳ, dũng mãnh.
                Nó là kết quả của cuộc lai tạo giữa hai giống chó là chó Bulldog Anh và chó Sục trắng Anh quốc.
                Năm 1870, lần đầu tiên được triển lãm tại Boston, lúc ấy màu sắc của giống chó này chưa quan trọng.
                Nhưng về sau, vào những năm 1900, màu lông của các con chó này được chú ý và được quy định
                thành các màu sắc tiêu chuẩn. Năm 1893, chó Boston được công nhận bởi Hiệp hội chó giống Mỹ (AKC).
                Đặc điểm ngoại hình
                Chó Boston được mọi người nhận xét là một con chó năng động, mạnh mẽ, sở hữu một thân hình hài hòa,
                cơ bắp săn chắc và quyến rũ. Một chú chó Boston có thể nặng khoảng từ 7kg đến 13kg, chiều cao khoảng từ 38 đến 45cm.
                Đầu có hình vuông, phẳng ở đỉnh, trán rộng và tương đối cân đối với cơ thể.
                Mõm ngắn, rộng sâu, ngắn hơn vùng mặt trước. Hàm răng có kích thước nhỏ, thấp hơn tạo ra một hàm chẵn.
                Mũi lớn, lỗ mũi định rõ, mở, chia rãnh thẳng.
                Cặp mắt tròn và to có màu tối. Đôi tai thì khá to dựng đứng trên đầu.
                Các chân săn chắc, thẳng và có cách xa nhau một chút. Ngực rộng, cổ hình vòm.
                Đuôi thuôn ngắn, không bị cắt cộc. Mông có một góc nhỏ, chiều rộng bằng với đai lưng.
                Lông mềm mượt, ngắn gọn. Bộ lông thường có màu trắng, kết hợp cùng với màu đen, màu nâu, hoặc là màu vện.
                Có một điều đặc biệt là lông của loài chó Boston không bao giờ có một màu duy nhất, lúc nào chúng cũng có sự kết hợp của hai màu.',
                'SpeciesSort' => 'Chó',
                'Species' => 'Boston',
                'Thumbnails' => '',
                'Age' => '3',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            )
        );
        Pet::insert($pets);
    }
}

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
            array(
                'Slug' => 'cho_soc_32',
                'Name' => 'Chó Sóc',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Chuộc từ lò mổ về, rất nhát',
                'Species' => 'Chó',
                'Breed' => 'Sóc',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/34dfad48-2182-4bad-b7b9-e5686e161584_vd4ewu,PetCasa/PetThumbnails/images_vnmasp',
                'Age' => '6 tháng - 2 năm',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'cho_charlie_12',
                'Name' => 'Chó Charlie',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé thuộc bầy 5 cún. Mẹ của mấy bé bị cẩu tặc bắt đi từ lúc con chưa cai sữa.
                5 bé con nheo nhóc phải đi gửi bú nhờ và chăm bộ. Bé chỉ là chó ta thôi, không phải tây hay lai gì cả.',
                'Species' => 'Chó',
                'Breed' => 'Chó ta',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/20c9fd65-77f3-4cf9-95ee-a35f323a76f8_tefufj',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'cho_zin_79',
                'Name' => 'Chó Zin',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé bị viêm gan đục hết một mắt, gãy chân trước thành tật, đi vòng tròn',
                'Species' => 'Chó',
                'Breed' => 'Phốc',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/ec1d4044-3451-4360-846d-3a2a1c6e96a0_q1s3kd',
                'Age' => '6 tháng - 2 năm',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'cho_hayley_42',
                'Name' => 'Chó Hayley',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé đi lạc đến một gia đình vào một ngày mưa gió. Được chủ nhà tốt bụng nhận nuôi',
                'Species' => 'Chó',
                'Breed' => 'Poodle',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/9233ce1a-57ab-4f6e-b29f-76b1baac6cbf_bqmgcw',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'cho_baba_56',
                'Name' => 'Chó Baba',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé bull được 3 tháng, không đi được, do nằm một tư thế trong thời gian
                dài nên cơ thể bé bị biến dạng giống baba, lồng ngực xẹp xuống, 4 chân duỗi 4 phía, bé không thể
                lật được người . Da bị nấm và viêm nặng.',
                'Species' => 'Chó',
                'Breed' => 'Bull',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/332ad92b-abb7-42c1-99af-8d0549682183_tz41it',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'meo_do_26',
                'Name' => 'Mèo Đô',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé được chuộc ở chợ Hà Đông, bị dính giảm bạch cầu',
                'Species' => 'Mèo',
                'Breed' => 'Mèo tây',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/8d3abd3a-f21b-424e-bb92-dbbe7c7f4a9d_kavkcj',
                'Age' => '6 tháng - 2 năm',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'meo_xuka_38',
                'Name' => 'Mèo Xuka',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé bị yếu chân',
                'Species' => 'Mèo',
                'Breed' => 'Mèo Lai',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/a37980ee-66cb-493b-82db-b97b18c94bcd_fibzfz',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'meo_beagano_28',
                'Name' => 'Mèo Beagan',
                'CertifiedPedigree' => 'Có',
                'Description' => 'Mẹ của Beagan là mèo hoang, được chúng mình cứu về khi đang bụng mang dạ chửa, lang thang xin ăn.
                Beagan trông thì nghịch nhưng thực ra bé có tâm hồn mong manh nhạy cảm. Lúc nào bé cũng rất nhẹ nhàng, tình cảm, và thích được ôm.
                Bé đang dần dạn dĩ tự tin hơn, và thích khám phá mọi chỗ trong nhà. Rất quấn người, còn thích leo vào trong lòng "mẹ nuôi" nằm để được ôm nựng nữa cơ.',
                'Species' => 'Mèo',
                'Breed' => 'Mèo Ba Tư',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/download_hejcg3',
                'Age' => '6 tháng - 2 năm',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'meo_yoda_27',
                'Name' => 'Mèo Yoda',
                'CertifiedPedigree' => 'Có',
                'Description' => 'Yoda ham vui ham chơi, thích nô đùa và khám phá mọi ngóc ngách trong nhà. "Mẹ nuôi" cứ đi đâu là bé theo đấy,
                 và còn thích mèo méo meo nói chuyện nữa cơ, nên đảm bảo nuôi bé là không bao giờ thấy lonely cô đơn đâu.',
                'Species' => 'Mèo',
                'Breed' => 'Mèo Mướp',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/download_1_tgqlk6',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'Slug' => 'meo_tabi_07',
                'Name' => 'Mèo Tabi',
                'CertifiedPedigree' => 'Có',
                'Description' => 'Tabi được tìm thấy lúc đêm hôm mưa gió, một chân thì gãy. Bác sĩ bảo chân con gãy lâu lắm rồi,
                không được chữa trị nên con đành phải sống với một chân bị tật thôi. Thế nhưng điều đấy chả ảnh hưởng gì đến con cả.
                Con vẫn hồn nhiên vui tươi, nghịch ngợm, còn rất yêu và quấn người nữa.',
                'Species' => 'Mèo',
                'Breed' => 'Mèo Mướp',
                'Vaccinated' => 'Có',
                'Thumbnails' => 'PetCasa/PetThumbnails/2bf2dc9a-787b-43ff-ad45-d30d0e2ab16f_coaxta',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            )
        );
        Pet::insert($pets);
    }
}

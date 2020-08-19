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
            array('Slug' => md5("admin"."123457"),
                'Name' => 'Chó Sóc',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Chuộc từ lò mổ về, rất nhát',
                'SpeciesSort' => 'Chó',
                'Species' => 'Sóc',
                'Thumbnails' => 'PetCasa/PetThumbnails/34dfad48-2182-4bad-b7b9-e5686e161584_vd4ewu,PetCasa/PetThumbnails/images_vnmasp',
                'Age' => '6 tháng - 2 năm',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123457"),
                'Name' => 'Chó Charlie',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé thuộc bầy 5 cún. Mẹ của mấy bé bị cẩu tặc bắt đi từ lúc con chưa cai sữa.
                5 bé con nheo nhóc phải đi gửi bú nhờ và chăm bộ. Bé chỉ là chó ta thôi, không phải tây hay lai gì cả.',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó ta',
                'Thumbnails' => 'PetCasa/PetThumbnails/20c9fd65-77f3-4cf9-95ee-a35f323a76f8_tefufj',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123457"),
                'Name' => 'Chó Zin',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé bị viêm gan đục hết một mắt, gãy chân trước thành tật, đi vòng tròn',
                'SpeciesSort' => 'Chó',
                'Species' => 'Phốc',
                'Thumbnails' => 'PetCasa/PetThumbnails/ec1d4044-3451-4360-846d-3a2a1c6e96a0_q1s3kd',
                'Age' => '6 tháng - 2 năm',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123457"),
                'Name' => 'Chó Hayley',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé đi lạc đến một gia đình vào một ngày mưa gió. Được chủ nhà tốt bụng nhận nuôi',
                'SpeciesSort' => 'Chó',
                'Species' => 'Poodle',
                'Thumbnails' => 'PetCasa/PetThumbnails/9233ce1a-57ab-4f6e-b29f-76b1baac6cbf_bqmgcw',
                'Age' => 'Dưới 6 tháng',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123457"),
                'Name' => 'Chó Baba',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Bé bull được 3 tháng, không đi được, do nằm một tư thế trong thời gian
                dài nên cơ thể bé bị biến dạng giống baba, lồng ngực xẹp xuống, 4 chân duỗi 4 phía, bé không thể
                lật được người . Da bị nấm và viêm nặng.',
                'SpeciesSort' => 'Chó',
                'Species' => 'Bull',
                'Thumbnails' => 'PetCasa/PetThumbnails/332ad92b-abb7-42c1-99af-8d0549682183_tz41it',
                'Age' => 'Dưới 6 tháng',
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

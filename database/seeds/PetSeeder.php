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
                'Slug' => md5("admin"."123458"),
                'Name' => 'Cute',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Lông dài, màu trắng,chân dài',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó Đốm',
                'Thumbnails' => '',
                'Age' => '14',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123457"),
                'Name' => 'Cute 2',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Lông ngắn, màu nâu,mắt 2 màu',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó Phốc',
                'Thumbnails' => '',
                'Age' => '14',
                'Sex' => 'Đực',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."123456"),
                'Name' => 'Cute 3',
                'CertifiedPedigree' => 'Không',
                'Description' => 'Lông dài, màu trắng,chân dài',
                'SpeciesSort' => 'Chó ',
                'Species' => 'Chó Corgi',
                'Thumbnails' => '',
                'Age' => '14',
                'Sex' => 'Cái',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                ));
        Pet::insert($pets);
    }
}

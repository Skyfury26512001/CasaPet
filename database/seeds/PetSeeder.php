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

        Pet::create(array(
                'Slug' => md5("admin"."12345"),
                'Name' => 'Cute',
                'CertifiedPedigree' => 'No',
                'Description' => 'Lông dài, màu trắng,chân dài',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó Đốm',
                'Age' => '14',
                'Sex' => '08454280124123',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array('Slug' => md5("admin"."12345"),
                'Name' => 'Cute',
                'CertifiedPedigree' => 'No',
                'Description' => 'Lông ngắn, màu nâu,mắt 2 màu',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó Phốc',
                'Age' => '14',
                'Sex' => '08454280124123',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                ),
            array('Slug' => md5("admin"."12345"),
                'Name' => 'Cute',
                'CertifiedPedigree' => 'No',
                'Description' => 'Lông dài, màu trắng,chân dài',
                'SpeciesSort' => 'Chó',
                'Species' => 'Chó Đốm',
                'Age' => '14',
                'Sex' => '08454280124123',
                'Neutered' => 'Yes',
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                )
        );
    }
}

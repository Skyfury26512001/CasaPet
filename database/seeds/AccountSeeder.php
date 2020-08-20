<?php

use App\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Account::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Account::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }

        Account::create(array(
                'PasswordHash' => md5("admin"."12345"),
                'Salt' => '12345',
                'Slug' => '123-adminer',
                'FullName' => 'adminer',
                'Email' => 'admin@admin',
                'PhoneNumber' => '0583788236',
                'Address' => 'So 7 Ton That Thuyet',
                'IDNo' => '251160427',
                'DateOfBirth' => '2002-07-29',
                'Avatar' => 'avatar_link',
                'Role_id' => 2,
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ));
        Account::create(array(
                'PasswordHash' => md5("user"."12345"),
                'Salt' => '12345',
                'Slug' => '123-user',
                'FullName' => 'user',
                'Email' => 'user@user',
                'PhoneNumber' => '084558392801',
                'Address' => 'So 6 Ton That Thuyet',
                'IDNo' => '251160427',
                'DateOfBirth' => '2002-07-29',
                'Avatar' => 'avatar_link',
                'Role_id' => 1,
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ));
        Account::create(array(
                'PasswordHash' => md5("superadmin"."12345"),
                'Salt' => '12345',
                'Slug' => '123-superadminer',
                'FullName' => 'superadminer',
                'Email' => 'superadmin@superadmin',
                'PhoneNumber' => '084558392801',
                'Address' => 'So 7 Ton That Thuyet',
                'IDNo' => '251160427',
                'DateOfBirth' => '2002-07-29',
                'Avatar' => 'avatar_link',
                'Role_id' => 3,
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ));
    }
}

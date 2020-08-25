<?php

use App\Report;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Report::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Report::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }
        $reports = array(
            array(
                'FullName'      => 'Quá trình phục hồi kì diệu của Gấu liệt', // Tiêu đề bài viết
                'Address'     => 'Nguyễn Văn Tài', // ID pet
                'PhoneNumber' => '0583973384', // Id tài khoản
                'Thumbnails'    => "", // Nội dung bài viết
                'Content'     => 1, // Trạng thái bài viết ( 1 : active ; 0 : deactive )
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays(rand(-30, 30)),
                'updated_at' => \Carbon\Carbon::now(),
            ),
            array(
                'FullName'      => 'Quá trình phục hồi kì diệu của Gấu liệt', // Tiêu đề bài viết
                'Address'     => 'Nguyễn Văn Tài', // ID pet
                'PhoneNumber' => '0583973384', // Id tài khoản
                'Thumbnails'    => "", // Nội dung bài viết
                'Content'     => 1, // Trạng thái bài viết ( 1 : active ; 0 : deactive )
                'Status' => 1,
                'created_at' => \Carbon\Carbon::now()->addDays(rand(-30, 30)),
                'updated_at' => \Carbon\Carbon::now(),
            ),
        );
        Report::insert($reports);
    }
}

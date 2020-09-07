<?php

use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_check = Order::all()->first();
        if ($data_check != null) {
            Schema::disableForeignKeyConstraints();
            Order::query()->truncate();
            Schema::enableForeignKeyConstraints();
        }
        $orders = array(
            array(
                'OrderType'   => 'Nhận nuôi', // Nhận nuôi hoặc Gửi nuôi
                'FullName'    => 'Nguyễn Văn Tài', // Họ và Tên
                'PhoneNumber' => '0583973384', // Số điện Thoại
                'Email'       => 'nguyenVanTai@gmail.com', // Email
                'PetId'       => 1,      // ID con pet
                'IDNo'        => '05723429371',       // Số chứng minh nhân dân , thẻ căn cước
                'Status'      => 0,      // trạng thái  0 - > Chưa xử lý ; 1 - Chưa xử lý ; 2 - Đã xử lý
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),
            ),
            array(
                'OrderType'   => 'Nhận nuôi', // Nhận nuôi hoặc Gửi nuôi
                'FullName'    => 'Nguyễn Văn Tài 2', // Họ và Tên
                'PhoneNumber' => '0583973384', // Số điện Thoại
                'Email'       => 'nguyenVanTai@gmail.com', // Email
                'PetId'       => 2,      // ID con pet
                'IDNo'        => '05723429371',       // Số chứng minh nhân dân , thẻ căn cước
                'Status'      => 0,      // trạng thái  0 - > Chưa xử lý ; 1 - Chưa xử lý ; 2 - Đã xử lý
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),
            ),
            array(
                'OrderType'   => 'Nhận nuôi', // Nhận nuôi hoặc Gửi nuôi
                'FullName'    => 'Nguyễn Văn Tài 2', // Họ và Tên
                'PhoneNumber' => '0583973384', // Số điện Thoại
                'Email'       => 'nguyenVanTai@gmail.com', // Email
                'PetId'       => 2,      // ID con pet
                'IDNo'        => '05723429371',       // Số chứng minh nhân dân , thẻ căn cước
                'Status'      => 0,      // trạng thái  0 - > Chưa xử lý ; 1 - Chưa xử lý ; 2 - Đã xử lý
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),
            ),
            array(
                'OrderType'   => 'Nhận nuôi', // Nhận nuôi hoặc Gửi nuôi
                'FullName'    => 'Nguyễn Văn Tài 2', // Họ và Tên
                'PhoneNumber' => '0583973384', // Số điện Thoại
                'Email'       => 'nguyenVanTai@gmail.com', // Email
                'PetId'       => 2,      // ID con pet
                'IDNo'        => '05723429371',       // Số chứng minh nhân dân , thẻ căn cước
                'Status'      => 0,      // trạng thái  0 - > Chưa xử lý ; 1 - Chưa xử lý ; 2 - Đã xử lý
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),
            ),
        );
        Order::insert($orders);
    }
}

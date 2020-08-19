<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('OrderType');
            $table->string('Fullname');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->unsignedBigInteger('PetId');
            $table->integer('Status');  // 0 - Chưa xử lý ; 1 - Từ chối ; 2 - Đồng ý ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

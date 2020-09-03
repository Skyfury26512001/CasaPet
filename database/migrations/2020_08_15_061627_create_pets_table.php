<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('Slug');
            $table->string('Name');
            $table->string('CertifiedPedigree')->nullable();
            $table->text('Thumbnails');
            $table->longText('Description');
            $table->string('Species');
            $table->string('Breed');
            $table->string('Vaccinated');
            $table->string('Age');
            $table->string('Sex');
            $table->string('Neutered');
            $table->integer('Status'); // 0 : Không hoạt động ; 1 : Hoạt động
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
        Schema::dropIfExists('pets');
    }
}

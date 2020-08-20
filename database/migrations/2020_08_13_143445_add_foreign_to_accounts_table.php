<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->foreign('Role_id')->references('id')->on('roles')->OnDelete("casade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropForeign('accounts_Role_id_foreign'); // Drop foreign key 'user_id' from 'posts' table
        });
        Schema::enableForeignKeyConstraints();
    }
}

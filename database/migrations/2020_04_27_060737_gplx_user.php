<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GplxUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gplx_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoten');
            $table->string('email');
            $table->string('ngaysinh');
            $table->string('password');
            $table->tinyInteger('level');
            $table->string('cmnd');
            $table->string('hokhau');
            $table->string('noio');
            $table->string('sodienthoai');
            //$table->rememberToken();
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
        Schema::dropIfExists('gplx_user');
    }
}

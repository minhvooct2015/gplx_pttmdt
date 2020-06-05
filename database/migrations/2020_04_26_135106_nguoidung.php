<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nguoidung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->bigIncrements('nd_id');
            $table->string('nd_hoten');
            $table->string('nd_matkhau');
            $table->string('nd_email');
            $table->string('nd_cmnd');
            $table->string('nd_hokhau');
            $table->string('nd_noio');
            $table->string('nd_sodienthoai');
             $table->rememberToken();
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
        Schema::dropIfExists('nguoidung');
    }
}

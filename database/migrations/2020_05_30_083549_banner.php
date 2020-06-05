<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('ban_id');
            $table->string('ban_ngang1');
            $table->string('ban_ngang2');
            $table->string('ban_trai1');
            $table->string('ban_trai2');
            $table->string('ban_trai3');
            $table->string('ban_trai4');
            $table->integer('ban_trangthai');
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
        Schema::dropIfExists('banner');
    }
}

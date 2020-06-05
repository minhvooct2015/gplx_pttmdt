<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshHangxe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_hangxe', function (Blueprint $table) {
            $table->bigIncrements('hx_id');
            $table->string('hx_ten');
            $table->string('hx_slug');
            $table->integer('hx_giatien');
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
        Schema::dropIfExists('cbsh_hangxe');
    }
}

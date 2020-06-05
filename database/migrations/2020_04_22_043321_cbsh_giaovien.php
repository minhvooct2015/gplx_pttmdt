<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshGiaovien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_giaovien', function (Blueprint $table) {
            $table->bigIncrements('gv_id');
            $table->string('gv_ten');
            $table->string('gv_slug');
            $table->string('gv_anh');
            $table->string('gv_diachi');
            $table->string('gv_trinhdo');
            $table->string('gv_sdt');
            $table->string('gv_email');
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
        Schema::dropIfExists('cbsh_giaovien');
    }
}

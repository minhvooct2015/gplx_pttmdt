<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshLichhoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_Lichhoc', function (Blueprint $table) {
            $table->bigIncrements('lh_id');
            $table->string('lh_ngay');
            $table->string('lh_giohocbatdau');
            $table->bigInteger('id_llh')->unsigned()->index();
            $table->foreign('id_llh')
            ->references('llh_id')
            ->on('cbsh_loailichhoc')
            ->onDelete('cascade');
            $table->bigInteger('id_ch')->unsigned()->index();
            $table->foreign('id_ch')
            ->references('ch_id')
            ->on('cbsh_chohoc')
            ->onDelete('cascade');
            $table->bigInteger('id_lhlx')->unsigned()->index();
            $table->foreign('id_lhlx')
            ->references('lhlx_id')
            ->on('cbsh_lophoclx')
            ->onDelete('cascade');
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
        Schema::dropIfExists('cbsh_Lichhoc');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Phieudangky extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieudangky', function (Blueprint $table) {
            $table->bigIncrements('pdk_id');
             $table->bigInteger('pdk_hx')->unsigned()->index();
              $table->foreign('pdk_hx')
            ->references('hx_id')
            ->on('cbsh_hangxe')
            ->onDelete('cascade');
            $table->bigInteger('pdk_blx')->unsigned()->index();
            $table->foreign('pdk_blx')
            ->references('blx_id')
            ->on('gplx_banglaixe')
            ->onDelete('cascade');
             $table->bigInteger('pdk_hv')->unsigned()->index();
            $table->foreign('pdk_hv')
            ->references('id')
            ->on('gplx_user')
            ->onDelete('cascade');
             $table->bigInteger('pdk_lhlx')->unsigned()->index();
            $table->foreign('pdk_lhlx')
            ->references('lhlx_id')
            ->on('cbsh_lophoclx')
            ->onDelete('cascade');
            $table->string('pdk_anhsk1');
            $table->string('pdk_anhsk2');
            $table->string('pdk_anh34');
            $table->string('pdk_anhcmnd1');
            $table->string('pdk_anhcmnd2');
            $table->string('pdk_diemTH');
            $table->string('pdk_diemLT');
            $table->string('pdk_tinhtrangHP');
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
        Schema::dropIfExists('phieudangky');
    }
}

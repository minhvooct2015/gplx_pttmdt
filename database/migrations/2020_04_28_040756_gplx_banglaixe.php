<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GplxBanglaixe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gplx_banglaixe', function (Blueprint $table) {
            $table->bigIncrements('blx_id');
            $table->bigInteger('blx_so');
            $table->bigInteger('id_hv')->unsigned()->index();
            $table->foreign('id_hv')
            ->references('id')
            ->on('gplx_user')
            ->onDelete('cascade');
            $table->string('blx_ngaycap');
            $table->string('blx_noicap');
            $table->bigInteger('blx_hx')->unsigned()->index();
              $table->foreign('blx_hx')
            ->references('hx_id')
            ->on('cbsh_hangxe')
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
        Schema::dropIfExists('gplx_banglaixe');
    }
}

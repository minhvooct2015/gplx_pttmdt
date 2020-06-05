<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Motahangxe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motahangxe', function (Blueprint $table) {
            $table->bigIncrements('mthx_id');
           $table->bigInteger('id_hx')->unsigned()->index();
            $table->foreign('id_hx')
            ->references('hx_id')
            ->on('cbsh_hangxe')
            ->onDelete('cascade');
             $table->string('mthx_anh');
              $table->longText('mthx_chitiet');
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
        Schema::dropIfExists('motahangxe');
    }
}

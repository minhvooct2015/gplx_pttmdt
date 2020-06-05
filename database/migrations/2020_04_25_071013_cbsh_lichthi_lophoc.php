<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshLichthiLophoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_lichthi_lophoc', function (Blueprint $table) {
            $table->bigIncrements('ltlh_id');
            $table->bigInteger('id_lt')->unsigned()->index();
            $table->foreign('id_lt')
            ->references('lt_id')
            ->on('cbsh_lichthi')
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
        Schema::dropIfExists('cbsh_lichthi_lophoc');
    }
}

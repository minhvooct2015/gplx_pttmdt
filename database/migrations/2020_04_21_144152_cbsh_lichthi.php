<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshLichthi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_lichthi', function (Blueprint $table) {
            $table->bigIncrements('lt_id');
            $table->string('lt_ngaythi');
            $table->string('lt_slug');
            $table->string('lt_giothi');
            $table->bigInteger('lt_chothi')->unsigned()->index();
            $table->foreign('lt_chothi')
            ->references('cth_id')
            ->on('cbsh_chothi')
            ->onDelete('cascade');
            $table->bigInteger('id_llt')->unsigned()->index();
            $table->foreign('id_llt')
            ->references('llh_id')
            ->on('cbsh_loailichhoc')
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
        Schema::dropIfExists('cbsh_lichthi');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshGiaovienLichthi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_giaovien_Lichthi', function (Blueprint $table) {
             $table->bigIncrements('gvlt_id');
           $table->bigInteger('id_gv')->unsigned()->index();
            $table->foreign('id_gv')
            ->references('gv_id')
            ->on('cbsh_giaovien')
            ->onDelete('cascade');
             $table->bigInteger('id_lt')->unsigned()->index();
            $table->foreign('id_lt')
            ->references('lt_id')
            ->on('cbsh_lichthi')
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
        Schema::dropIfExists('cbsh_giaovien_Lichthi');
    }
}

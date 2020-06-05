<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshLophoclx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_lophoclx', function (Blueprint $table) {
            $table->bigIncrements('lhlx_id');
            $table->string('lhlx_ten');
            $table->bigInteger('lhlx_gv')->unsigned()->index();
            $table->foreign('lhlx_gv')
            ->references('gv_id')
            ->on('cbsh_giaovien')
            ->onDelete('cascade');
            $table->bigInteger('lhlx_hx')->unsigned()->index();
            $table->foreign('lhlx_hx')
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
        Schema::dropIfExists('cbsh_lophoclx');
    }
}

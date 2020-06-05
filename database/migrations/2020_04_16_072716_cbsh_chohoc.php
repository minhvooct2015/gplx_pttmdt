<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CbshChohoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cbsh_chohoc', function (Blueprint $table) {
            $table->bigIncrements('ch_id');
            $table->string('ch_ten');
            $table->string('ch_slug');
            $table->string('ch_diachi');
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
        Schema::dropIfExists('cbsh_chohoc');
    }
}

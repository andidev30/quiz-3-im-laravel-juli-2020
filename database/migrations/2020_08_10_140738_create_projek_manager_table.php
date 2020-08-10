<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjekManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projek_manager', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('karyawan_id')->unsigned();
            $table->bigInteger('projek_id')->unsigned();
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawan');
            $table->foreign('projek_id')->references('id')->on('projek');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projek_manager');
    }
}

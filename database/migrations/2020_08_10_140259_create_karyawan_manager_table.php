<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_manager', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('staff_karyawan_id')->unsigned();
            $table->bigInteger('manager_karyawan_id')->unsigned();
            $table->timestamps();

            $table->foreign('staff_karyawan_id')->references('id')->on('karyawan');
            $table->foreign('manager_karyawan_id')->references('id')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawan_manager');
    }
}

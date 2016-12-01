<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiMaterisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_materi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alokasi_dosen_matakuliah_id')->unsigned();
            $table->string('nama');
            $table->string('ext');
            $table->timestamps();


            $table->foreign('alokasi_dosen_matakuliah_id')
                ->references('id')
                ->on('alokasi_dosen_matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasi_materi');
    }
}

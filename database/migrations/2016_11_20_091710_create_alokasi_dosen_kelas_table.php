<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiDosenKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_dosen_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alokasi_dosen_matakuliah_id')->unsigned();
            $table->integer('kelas_id')->unsigned();
            $table->timestamps();

            $table->foreign('alokasi_dosen_matakuliah_id')
                ->references('id')
                ->on('alokasi_dosen_matakuliah');

            $table->foreign('kelas_id')
                ->references('id')
                ->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasi_dosen_kelas');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiMahasiswaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_mahasiswa_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id')->unsigned();
            $table->integer('alokasi_dosen_kelas_id')->unsigned();
            $table->timestamps();

            $table->foreign('mahasiswa_id')
                ->references('id')
                ->on('mahasiswa');

            $table->foreign('alokasi_dosen_kelas_id')
                ->references('id')
                ->on('alokasi_dosen_kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasi_mahasiswa_kelas');
    }
}

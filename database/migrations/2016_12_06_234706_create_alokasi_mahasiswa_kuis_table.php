<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiMahasiswaKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_mahasiswa_kuis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alokasi_kuis_id')->unsigned();
            $table->integer('mahasiswa_id')->unsigned();
            $table->float('nilai')->nullable();
            $table->boolean('status')->default(0);
            $table->string('ext');

            $table->timestamps();

            $table->foreign('mahasiswa_id')
                ->references('id')
                ->on('mahasiswa');

            $table->foreign('alokasi_kuis_id')
                ->references('id')
                ->on('alokasi_kuis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasi_mahasiswa_kuis');
    }
}

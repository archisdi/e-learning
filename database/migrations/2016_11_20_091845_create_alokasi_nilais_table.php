<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_nilai', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alokasi_kuis_id')->unsigned();
            $table->integer('mahasiswa_id')->unsigned();
            $table->timestamps();

            $table->foreign('alokasi_kuis_id')
                ->references('id')
                ->on('alokasi_kuis');

            $table->foreign('mahasiswa_id')
                ->references('id')
                ->on('mahasiswa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasi_nilai');
    }
}
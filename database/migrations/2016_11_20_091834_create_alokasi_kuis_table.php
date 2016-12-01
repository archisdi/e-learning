<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiKuisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_kuis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alokasi_dosen_kelas_id')->unsigned();
            $table->string('ext');
            $table->string('desc');
            $table->timestamps();

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
        Schema::dropIfExists('alokasi_kuis');
    }
}

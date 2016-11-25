<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlokasiDosenMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alokasi_dosen_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id')->unsigned();
            $table->integer('matakuliah_id')->unsigned();
            $table->timestamps();

            $table->foreign('dosen_id')
                ->references('id')
                ->on('dosen');

            $table->foreign('matakuliah_id')
                ->references('id')
                ->on('matakuliah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alokasi_dosen_matakuliah');
    }
}

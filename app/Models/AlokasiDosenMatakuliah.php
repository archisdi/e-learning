<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlokasiDosenMatakuliah extends Model
{
    protected $table = 'alokasi_dosen_matakuliah';

    public function materi(){
        return $this->HasMany('App\Models\AlokasiMateri');
    }

    public function matakuliah(){
        return $this->BelongsTo('App\Models\Matakuliah');
    }

    public function dosen_kelas(){
        return $this->HasMany('App\Models\AlokasiDosenKelas');
    }

}

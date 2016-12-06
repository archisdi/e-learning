<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlokasiDosenKelas extends Model
{
    protected $table = 'alokasi_dosen_kelas';

    public function kelas(){
        return $this->BelongsTo('App\Models\Kelas');
    }

    public function dosen_matakuliah(){
        return $this->BelongsTo('App\Models\AlokasiDosenMatakuliah','alokasi_dosen_matakuliah_id');
    }

    public function kuis(){
        return $this->HasMany('App\Models\AlokasiKuis');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlokasiMahasiswaKuis extends Model
{
    protected $table = 'alokasi_mahasiswa_kuis';

    protected $fillable = [
        'mahasiswa_id', 'alokasi_kuis_id', 'nilai', 'status', 'ext'
    ];

    public function mahasiswa()
    {
        return $this->BelongsTo('App\Mahasiswa');
    }

    public function kuis(){
        return $this->BelongsTo('App\Models\AlokasiKuis','alokasi_kuis_id');
    }
}

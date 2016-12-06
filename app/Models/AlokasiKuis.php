<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AlokasiKuis extends Model
{
    protected $table = 'alokasi_kuis';

    protected $fillable = [
      'desc', 'title', 'due', 'ext', 'alokasi_dosen_kelas_id'
    ];

    public function remaining()
    {
        $now = Carbon::now();
        $due = new Carbon($this->due);
        $diffdays = $now->diffInDays($due);
        $diffhours = $now->diffInHours($due);

        if ($diffdays == 0) {
            return $diffhours . ' Jam';
        } else {
            return $diffdays . ' Hari';
        }
    }

    public function mahasiswa_kuis(){
        return $this->HasMany('App\Models\AlokasiMahasiswaKuis');
    }
}

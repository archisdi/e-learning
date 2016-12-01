<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlokasiMateri extends Model
{
    protected $table = 'alokasi_materi';

    protected $fillable = [
        'nama', 'ext'
    ];
}

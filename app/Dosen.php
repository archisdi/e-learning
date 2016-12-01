<?php

namespace App;

use App\Notifications\DosenResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dosen extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $table = 'dosen';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new DosenResetPassword($token));
    }

    public function matakuliah(){
        return $this->BelongsToMany('App\Models\Matakuliah','alokasi_dosen_matakuliah');
    }

    public function dosen_matakuliah(){
        return $this->HasMany('App\Models\AlokasiDosenMatakuliah');
    }

    public function dosen_kelas(){
        return $this->HasManyThrough('App\Models\AlokasiDosenKelas','App\Models\AlokasiDosenMatakuliah');
    }
}

<?php

namespace App;

use App\Notifications\MahasiswaResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'nim', 'password', 'email', 'jenis_kelamin'
    ];

    protected $table = 'mahasiswa';

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
        $this->notify(new MahasiswaResetPassword($token));
    }

    public function gender(){
        if($this->jenis_kelamin == 'L'){
            return 'Laki-laki';
        }else{
            return 'Perempuan';
        }
    }
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'tanggal', 'email', 'alamat', 'telepon', 'kelamin', 'password'
    ];

    public function getNamaKelaminAttribute(){
        $namakelamin = "";
        if($this->kelamin=="Pria"){
            $namakelamin = "Pria";
        }elseif($this->jenis=="Wanita"){
            $namakelamin = "Wanita";
        }
        return $namakelamin;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

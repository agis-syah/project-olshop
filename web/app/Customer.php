<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='tblcustomer';

    protected $fillable = ['nama', 'email', 'password', 'tgl', 'telepon', 'username', 'alamat'];

    public function setPasswordAttribute($value){
        $this->attributes["password"] = Hash::make($value);
    }
}

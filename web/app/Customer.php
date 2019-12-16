<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='tblcustomer';

    protected $fillable = ['nama', 'email', 'password', 'tgl', 'telepon', 'username', 'alamat'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table="tblsupplier";

    protected $fillable = ['nama','alamat','telepon','email'];
}

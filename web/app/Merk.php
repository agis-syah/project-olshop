<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    //
    protected $table="tblmerk";

    protected $fillable= ['nama', 'jenis'];

    public function databarang()
    {
        return $this->hasMany('App\DataBarang');
    }
}

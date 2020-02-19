<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    //
    protected $table="tblmerk";

    protected $fillable= ['nama', 'jenis'];

    public function getNamaJenisAttribute($jenis){
        $namajenis = "";
        if($this->jenis=="k"){
            $namajenis = "Komputer";
        }elseif($this->jenis=="l"){
            $namajenis = "Laptop";
        }elseif($this->jenis=="g"){
            $namajenis = "Gadget";
        }
        return $namajenis;
    }

    public function databarang()
    {
        return $this->hasMany('App\DataBarang');
    }
}

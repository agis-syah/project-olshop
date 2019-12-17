<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table="tbldatabarang";

    protected $fillable= ['kode','merk','nama', 'jenis', 'stok', 'harga', 'detail'];

    public function getNamaJenisAttribute(){
        $namajenis = "";
        if($this->jenis=="Komputer"){
            $namajenis = "Komputer";
        }elseif($this->jenis=="Laptop"){
            $namajenis = "Laptop";
        }elseif($this->jenis=="Gadget"){
            $namajenis = "Gadget";
        }
        return $namajenis;
    }
}

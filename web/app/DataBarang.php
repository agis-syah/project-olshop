<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table="tbldatabarang";

    protected $fillable= ['kode','merk','nama', 'jenis', 'stok', 'harga', 'detail'];

    public function getNamaJenisAttribute(){
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
}

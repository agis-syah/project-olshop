<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $table="tblbrgmsk";

    protected $fillable= ['kode','id_barang','merk', 'jenis', 'tgl', 'stok', 'harga', 'id_supplier'];

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

    public function barang()
    {
        return $this->hasMany('App\DataBarang');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}

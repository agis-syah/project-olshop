<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProduk extends Model
{
    //
    protected $table="tbldetail";

    protected $fillable= ['id_barang','procie','ram', 'tipe', 'ssd', 'hdd', 'display', 'network', 'baterai'];

    public function getNamaRamAttribute($ram){
        $namaram = "";
        if($this->ram=="2"){
            $namaram = "2 GB";
        }elseif($this->ram=="4"){
            $namaram = "4 GB";
        }elseif($this->ram=="8"){
            $namaram = "8 GB";
        }elseif($this->ram=="8on"){
            $namaram = "8 GB (4 GB onboard + 4 GB)";
        }elseif($this->ram=="16"){
            $namaram = "16 GB";
        }
        return $namaram;
    }

    public function getNamassdAttribute($ssd){
        $namassd = "";
        if($this->ssd=="none"){
            $namassd = "None";
        }elseif($this->ssd=="120"){
            $namassd = "120 GB";
        }elseif($this->ssd=="240"){
            $namassd = "240 GB";
        }elseif($this->ssd=="480"){
            $namassd = "480 GB";
        }elseif($this->ssd=="512"){
            $namassd = "512 GB";
        }elseif($this->ssd=="1"){
            $namassd = "1 TB";
        }
        return $namassd;
    }

    public function getNamahddAttribute($hdd){
        $namahdd = "";
        if($this->hdd=="none"){
            $namahdd = "None";
        }elseif($this->hdd=="250"){
            $namahdd = "250 GB";
        }elseif($this->hdd=="320"){
            $namahdd = "320 GB";
        }elseif($this->hdd=="500"){
            $namahdd = "500 GB";
        }elseif($this->hdd=="1"){
            $namahdd = "1 TB";
        }
        return $namahdd;
    }

    public function barang()
    {
        return $this->belongsTo('App\DataBarang',"id_barang","id");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ongkir extends Model
{
    //
    protected $table="tblongkir";

    protected $fillable = ['wilayah','harga'];

    public function getNamaWilayahAttribute(){
        $namawilayah = ""; 

        if($this->wilayah=="Binjai"){
            $namawilayah = "Binjai";

        }elseif($this->wilayah=="Kisaran"){
            $namawilayah = "Kisaran";
        }    
        else
            $namawilayah = "Medan";

        return $namawilayah;
    }
}

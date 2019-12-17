<?php

namespace App\Http\Controllers;

use App\DataBarang;
use App\BarangMasuk;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function laporanstok(Request $request){
        $data = DB::table("tbldatabarang")
        ->where("id",$request->get("merk"))
        ->get();

        $merk = DataBarang::all();
        return view("pages.laporan.stok",compact("merk","data"));
    }

    public function laporanbarangmasuk(Request $request){
        $data = DB::table("tblbrgmsk")
        ->whereBetween("tgl",[
            $request->get("daritanggal"),
            $request->get("sampaitanggal")
        ])
        ->where("id_supplier",$request->get("supplier"))
        ->get();
        
        $supplier = BarangMasuk::all();
        return view("pages.laporan.barangmasuk", compact("supplier","data"));
    }

    public function laporanpenjualan(Request $request){
        $data = DB::table("tblbrgmsk")
                        ->whereBetween("tgl",[
                            $request->get("daritanggal"),
                            $request->get("sampaitanggal")
                        ])
                        ->get();
        return view("pages.laporan.penjualan", compact("data"));
    }

    public function laporanreturn(Request $request){
        $data = DB::table("tblbrgmsk")
                        ->whereBetween("tgl",[
                            $request->get("daritanggal"),
                            $request->get("sampaitanggal")
                        ])
                        ->get();
        return view("pages.laporan.return.list", compact("data"));
    }
}

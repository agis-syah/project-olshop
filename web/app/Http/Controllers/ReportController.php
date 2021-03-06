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
        $data=DB::table("tbldatabarang as a")
                    ->join("tblmerk as b","a.merk_id","=","b.id")
                    ->select("b.nama as merk","b.jenis as jenis",
                            "a.kode","a.stok","a.nama as nama", 
                            "a.harga")
                    ->where("a.id",$request->get("merk"))
                    ->get();
        // $data = DB::table("tbldatabarang")
        // ->where("id",$request->get("merk"))
        // ->get();
        $merk = DataBarang::all();
        return view("pages.laporan.stok",compact("merk","data"));
    }

    // public function laporanbarangmasuk(Request $request){
    //     $data = DB::table("tblbrgmsk")
    //     ->whereBetween("tgl",[
    //         $request->get("daritanggal"),
    //         $request->get("sampaitanggal")
    //     ])
    //     ->where("id_supplier",$request->get("supplier"))
    //     ->get();
        
    //     $supplier = BarangMasuk::all();
    //     return view("pages.laporan.barangmasuk", compact("supplier","data"));
    // }

    public function laporanbarangmasuk(Request $request){
        $data = DB::table("tblbrgmsk as a")
                ->join("tblsupplier as b", "a.id_supplier","=","b.id")
                ->join("tbldatabarang as c","a.id_barang","=","c.id")
                ->select("b.nama as nama_supplier",
                          "c.nama as nama_barang",
                          "a.merk","a.jenis","a.tgl","a.stok","a.harga")
        ->whereBetween("tgl",[
            $request->get("daritanggal"),
            $request->get("sampaitanggal")
        ])
        ->where("id_supplier",$request->get("supplier"))
        ->get();
        
        $supplier = Supplier::all();
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
        return view("pages.laporan.return", compact("data"));
    }
}

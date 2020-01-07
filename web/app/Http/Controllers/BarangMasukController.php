<?php

namespace App\Http\Controllers;

use App\BarangMasuk;
use App\DataBarang;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BarangMasuk::paginate(10);

        return view("pages.barangmasuk.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = DataBarang::all();
        $supplier = Supplier::all();
        return view("pages.barangmasuk.form",compact("barang","supplier"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'merk' => 'required',
            'tgl' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);

        BarangMasuk::create($request->except("_token"));
        // // DataBarang::where("id",$request->id_barang)
        // //         ->update($request->except(["nama","jenis","merk","tgl","stok","harga","kode","id_barang","_token","_method"]));
        // DataBarang::where("id",$request->id_barang)
        //         ->update($request->qty);

        $request = DB::table('tbldatabarang')
            ->where('id',$request->id_barang)
            ->update(['stok'] -> $request->qty);

        // $databrg = new DataBarang;
        // $databrg->stok = $request->qty;
        // $databrg->update();


        $request->session()->flash("info","Berhasil Tambah Data Barang Masuk");
        return redirect()->route("barangmasuk.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BarangMasuk::find($id);
        $barang = DataBarang::all();
        $supplier = Supplier::all();
        return view("pages.barangmasuk.form", compact("data","barang","supplier"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(BarangMasuk $barangMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'merk' => 'required',
            'tgl' => 'required',
            'stok' => 'required',
            'harga' => 'required'
        ]);
        
        BarangMasuk::where("id",$id)
                ->update($request->except(["_token","_method"]));
        
        $request->session()->flash("info","Berhasil Ubah Data Barang Masuk");

        return redirect()->route("barangmasuk.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BarangMasuk::destroy($id);

        return redirect()->route("barangmasuk.index")
            ->with("info","Berhasil Hapus Data Barang Masuk");
    }
}

<?php

namespace App\Http\Controllers;

use App\BarangMasuk;
use App\DataBarang;
use App\Supplier;
use Illuminate\Http\Request;

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
        // $barangmasuk = new BarangMasuk;
        // $databarang = new DataBarang;
        // $barangmasuk->kode = $request->kode;
        // $barangmasuk->id_barang = $request->id_barang;
        // $barangmasuk->merk = $request->merk;
        // $barangmasuk->jenis = $request->jenis;
        // $barangmasuk->tgl = $request->tgl;
        // $barangmasuk->stok = $request->stok;
        // $barangmasuk->harga = $request->harga;
        // $barangmasuk->id_supplier = $request->id_supplier;
        // $barangmasuk->save();


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
        DataBarang::where("id",$id)
                ->update($request->except(["_token","_method","id_barang","kode","merk","tgl","harga","id_supplier"]));
        
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

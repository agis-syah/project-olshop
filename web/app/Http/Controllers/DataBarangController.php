<?php

namespace App\Http\Controllers;

use App\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataBarang::paginate(10);
        return view("pages.databarang.list", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("pages.databarang.form");
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
            'kode' => 'required|max:20',
            'nama' => 'required|max:50',
            'merk' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'detail' => 'required'
        ]);

        DataBarang::create($request->except("_token"));

        $request->session()->flash("info","Berhasil Tambah Data Barang");
        return redirect()->route("databarang.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataBarang::find($id);
        return view("pages.databarang.form", compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|max:20',
            'nama' => 'required|max:50',
            'merk' => 'required',
            'jenis' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'detail' => 'required'
        ]);

        DataBarang::where("id",$id)
            ->update($request->except(["_token","_method"]));

            $request->session()->flash("info","Berhasil Ubah Data Barang");

            return redirect()->route("databarang.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataBarang::destroy($id);
        return redirect()->route("databarang.index")
            ->with("info","Berhasil Hapus Data Staff");
    }
    
    public function getbarang($id){
        return response()->json(DataBarang::selectRaw("kode,merk")->find($id));
    }
}

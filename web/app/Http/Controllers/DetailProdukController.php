<?php

namespace App\Http\Controllers;

use App\DetailProduk;
use App\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DetailProduk::paginate(10);
        return view("pages.detailproduk.list", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $barang = DataBarang::all();
        return view("pages.detailproduk.form",compact("barang"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'procie' => 'required',
            'tipe' => 'required',
            'display' => 'required',
            'network' => 'required',
            'baterai' => 'required'
        ]);

        DetailProduk::create($request->except("_token"));

        $request = DB::table('tbldatabarang')
        ->where('id',$request->id_barang)
        ->update(['procie'] -> $request->procie)
        ->update(['ram'] -> $request->ram)
        ->update(['tipe'] -> $request->tipe)
        ->update(['ssd'] -> $request->ssd)
        ->update(['hdd'] -> $request->hdd)
        ->update(['display'] -> $request->display)
        ->update(['network'] -> $request->network)
        ->update(['baterai'] -> $request->baterai)->get();

    
        $request->session()->flash("info","Berhasil Tambah Detail Produk");
        return redirect()->route("detailproduk.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = DetailProduk::find($id);
        $barang = DataBarang::all();
        return view("pages.detailproduk.form", compact("data","barang"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     *@param  \App\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'procie' => 'required',
            'tipe' => 'required',
            'display' => 'required',
            'network' => 'required',
            'baterai' => 'required'
        ]);
        
        DetailProduk::where("id",$id)
                ->update($request->except(["_token","_method"]));
        
        $request->session()->flash("info","Berhasil Ubah Detail Produk");

        return redirect()->route("detailproduk.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailProduk  $detailProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DetailProduk::destroy($id);

        return redirect()->route("detailproduk.index")
            ->with("info","Berhasil Hapus Detail Produk");
    }
}

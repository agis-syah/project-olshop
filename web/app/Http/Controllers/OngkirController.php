<?php

namespace App\Http\Controllers;

use App\Ongkir;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Ongkir::paginate(10);
        return view('pages.ongkir.list',compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.ongkir.form');
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
            "wilayah" => "required|max:100",
            "harga" => "required"
        ]);

        Ongkir::create($request->except("_token"));

        $request->session()->flash("info", "Berhasil Tambah Data Ongkir");

        return redirect()->route("ongkir.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Ongkir::find($id);
        return view('pages.ongkir.form', compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function edit(Ongkir $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            "wilayah" => "required|max:100",
            "harga" => "required"
        ]);

        Ongkir::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info", "Berhasil Ubah Data Ongkir");

        return redirect()->route("ongkir.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ongkir::destroy($id);

        return redirect()->route("ongkir.index")
            ->with("info", "Berhasil Hapus Data Ongkir");
    }
}

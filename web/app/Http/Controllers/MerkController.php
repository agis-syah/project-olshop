<?php

namespace App\Http\Controllers;

use App\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Merk::paginate(10);
        return view("pages.merk.list", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.merk.form');
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
            "nama" => "required",
            "jenis" => "required"
        ]);

        Merk::create($request->except("_token"));

        $request->session()->flash("info", "Berhasil Tambah Merk");

        return redirect()->route("merk.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Merk::find($id);
        return view('pages.merk.form', compact("data"));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $request->validate([
        //     "nama" => "required",
        //     "jenis" => "required"
        // ]);

        Merk::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info", "Berhasil Ubah Data Merk");

        return redirect()->route("merk.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Merk::destroy($id);

        return redirect()->route("merk.index")
            ->with("info", "Berhasil Hapus Data Merk");
    }
}

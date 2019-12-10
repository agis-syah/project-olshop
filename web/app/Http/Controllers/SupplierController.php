<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Supplier::all();
        return view('pages.datasupplier.list',compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.datasupplier.form');
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
            "nama" => "required|max:100",
            "alamat" => "required|max:100",
            "telepon" => "required|max:25",
            "email" => "required|email|max:50"
        ]);

        Supplier::create($request->except("_token"));

        $request->session()->flash("info", "Berhasil Tambah Supplier");

        return redirect()->route("supplier.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Supplier::find($id);
        return view('pages.datasupplier.form', compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
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
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            "nama" => "required|max:100",
            "alamat" => "required|max:100",
            "telepon" => "required|max:25",
            "email" => "required|email|max:50"
        ]);

        Supplier::where("id",$id)
                ->update($request->except(["_token","_method"]));

        $request->session()->flash("info", "Berhasil Ubah Data Supplier");

        return redirect()->route("supplier.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Supplier::destroy($id);

        return redirect()->route("supplier.index")
            ->with("info", "Berhasil Hapus Data Supplier");
    }
}

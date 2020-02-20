<?php

namespace App\Http\Controllers\API;

use App\DataBarang;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\BarangResource;
use App\Http\Resources\MerkResource;
use App\Http\Resources\DaftarResource;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    // public function getbarang($idbarang){
    //     $data = DataBarang::where("")
    // }

    public function postLogin(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        $customer = \App\Customer::where("email",$request->email)
                        ->selectRaw("id,password")
                        ->first();

        if($customer){
            if(\Hash::check($request->password,$customer->password)){
                return response()->json([
                    "status" => true,
                    "idcustomer" => $customer->id
                ]);
            }
        }

        return response()->json([
            "status" => false
        ]);
    }

    public function getProfile($id){
        // ambil data pertama customer berdasarkan idcustomer
        $customer = \App\Customer::where("id",$id)->first();

        // kembalikan data customer ke dalam format json
        // format tampilan customer dengan resource menjadi nama,email,dept
        return response()->json(new CustomerResource($customer));
    }

    public function postPassword(Request $request){
        $request->validate([
            "idcustomer" => "required|exists:tblcustomer,id",
            "passwordbaru" => "required|confirmed"
        ]);

        $customer = \App\Customer::find($request->idcustomer);
        $customer->password = $request->passwordbaru;
        $customer->save();

        return response()->json([
            "status" => true
        ]);
    }

    public function postProfilepic(Request $request){
        if($request->hasFile("profilepic")){
            $customer = \App\Customer::find($request->idcustomer);
            Storage::delete("/public/profile/customer/".$customer->filename);
            $fullpath = $request->file("profilepic")
                        ->store("/public/profile/customer");

            $filename = explode("/",$fullpath)[3];

            $customer->filename = $filename;
            $customer->save();
        }

        return response()->json([
            "status" => true,
            "profilepic" => $filename
        ]);
    }

    public function getlistsmartphone(){
        // jenisnya diganti sesuai jnis
        $data = \App\Merk::where("jenis","g")
                    ->get();

        return response()->json(MerkResource::collection($data));
    }

    public function getlistlaptop(){
        // jenisnya diganti sesuai jnis
        $data = \App\Merk::where("jenis","l")
                    ->get();

        return response()->json(MerkResource::collection($data));
    }

    public function getlistkomputer(){
        // jenisnya diganti sesuai jnis
        $data = \App\Merk::where("jenis","k")
                    ->get();

        return response()->json(MerkResource::collection($data));
    }

    public function postDaftar(Request $request){
        $request->validate([
            "nama" => "required",
            "email" => "required",
            "password" => "required",
            "confirmed_password" => "required|confirmed"
        ]);

        $daftar = new DaftarResource;
        $daftar->nama = $request->nama;
        $daftar->email = $request->email;
        $daftar->password = $request->password;
        $daftar->confirmed_password = $request->confirmed_password;
        $daftar->save();

        return response()->json(["status" => true]);
    }
}
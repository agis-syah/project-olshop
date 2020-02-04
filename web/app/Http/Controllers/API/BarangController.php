<?php

namespace App\Http\Controllers\API;

use App\DataBarang;
use App\Http\Controllers\Controller;
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
}
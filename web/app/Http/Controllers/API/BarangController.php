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
                        ->select("password")
                        ->first();

        if($customer){
            if(\Hash::check($request->password,$customer->password)){
                return response()->json([
                    "status" => true
                ]);
            }
        }

        return response()->json([
            "status" => false
        ]);
    }
}

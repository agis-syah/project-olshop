<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $data = User::find(auth()->user()->id);

        return view("pages.profile.profil",compact("data"));
    }

    public function simpan(Request $request){
        $request->validate([
            "name" => "required|max:100",
            "tanggal" => "required",
            "email" => "required|email",
            "alamat" => "required",
            "telepon" => "required",
            "kelamin" => "required"
        ]);
        User::where(auth()->user()->id)
        ->update(["name" => $request->name,
                "tanggal" => $request->tanggal,
                "email" => $request->email,
                "alamat" => $request->alamat,
                "telepon" => $request->telepon,
                "kelamin" => $request->kelamin]);

        return redirect()->route("user");
    }
}

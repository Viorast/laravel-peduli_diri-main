<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }

    public function index() {
        return view('pages.registrasi');
    }

    public function simpanRegister(Request $request){

        $request->validate([
            'nik'=> 'required|unique:users,email',
            'name'=> 'required'
        ],
        [
            'nik.unique'=>'NIK sudah terdaftar',
            'name.required'=>'Nama tidak boleh kosong'
        ]
        );

        $data=[
            'name'=>$request->name,
            'email'=>$request->nik,
            'password'=>bcrypt($request->nik)
        ];
        // dd($data);

        User::create($data);

        return redirect('/')->with('message', 'Registrasi berhasil');
    }
}

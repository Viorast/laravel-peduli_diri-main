<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('pages.login');
    }

    public function simpanLogin(Request $request) {
        if(Auth::attempt(['name'=>$request->name, 'email'=>$request->nik, 'password'=>$request->nik])){
            return redirect('/dashboard');
        }
        return redirect('/')->with('message', 'Login gagal Nik dan nama tidak ditemukan');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }


    // Registrasi
    public function halamanRegister() {
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

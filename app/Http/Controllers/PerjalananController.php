<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PerjalananController extends Controller
{

    public function __construct() {
        $this->middleware('authcheck')->except('logout');
    }

    public function index(){
        if(auth()->user()) {
            $data = DB::table('perjalanans')
            ->join('users', 'users.id', '=', 'perjalanans.id_user')
            ->select('perjalanans.tanggal','perjalanans.lokasi', 'perjalanans.jam', 'perjalanans.suhu')
            ->where('users.id', '=', auth()->user()->id)
            ->get();

            return view('pages.dashboard', ['data' => $data]);

        }
        return view('pages.dashboard');
    }


    public function showDataPage(){
        return view('pages.tambah_data');
    }

    // create Data
    public function simpanPerjalanan(Request $request){

        $this->validate($request,[
            'lokasi' => 'required|max:100|',
            'tanggal' => 'required|date',
            'jam' => 'required|Timezone',
            'suhu' => 'numeric|'
         ]);

        $data=[
            'id_user'=>auth()->user()->id,
            'tanggal'=>$request->tanggal,
            'jam'    =>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu'=>$request->suhu
        ];
        // dd($data);

    perjalanan::create($data);

    return redirect('/dashboard');

    }

    // Edit Data
    public function editPerjalanan($id){
        $data = Perjalanan::find($id);

        return view('pages.edit', compact('data'));
    }

    public function update(Request $request, $id){
        $dataid = Perjalanan::findOrFail($id);

        if(!$dataid) {
            return abort(404);
        }

        if(auth()->user()->id == $dataid->id_user) {
            $data = $request->all();
            $data['update_at'] = now('Asia/Jakarta');
            $data['id_user'] = auth()->user()->id;

            $dataid->update($data);

            return redirect('/dashboard');
        }
        return abort(404);
    }

    // delete
    public function delete($id){
        $data = Perjalanan::findOrFail($id);

        if(!$data) {
            return abort(404);
        }
        if (auth()->user()->id == $data->id_user){
            $data->delete($data);
            return redirect('/dashboard');
        }

        return abort(404);
    }


    // datatables
    public function data(){
        $a=+ 1;


        if(auth()->user()) {
            $data = DB::table('perjalanans')
            ->join('users', 'users.id', '=', 'perjalanans.id_user')
            ->select('perjalanans.id','perjalanans.tanggal','perjalanans.lokasi', 'perjalanans.jam', 'perjalanans.suhu')
            ->where('users.id', '=', auth()->user()->id)
            ->get();

        return DataTables::of($data)
        ->addColumn('action', function ($data) {
            return '
            <a href="/edit/'.$data->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
            <a href="/delete/'.$data->id.'" class="btn btn-xs btn-danger"> <button type="submit" class="btn btn-danger"
            onclick="return confirm(\'Anda Yakin Mau Menghapus data ini?\')" style="font-size:15px; padding:0em; margin:0px">Delete</button></a>
            ';
        })
        ->make(true);

        }
        return view('pages.dashboard');
    }
}

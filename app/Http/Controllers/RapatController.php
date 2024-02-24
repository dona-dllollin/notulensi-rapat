<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RapatController extends Controller
{

    function index(){
        $data = Meeting::all();
        $tittle = "Halaman Tabel Rapat";

        return view('halaman_rapat.index', compact(['data', 'tittle']));
    }

    function tambah(){
        $type = Type::all();
        $tittle = 'Tambah Rapat';
        return view('halaman_rapat.tambah', compact('tittle', 'type'));
    }

    function create(Request $request){

        Meeting::insert([
            'nomor' => $request->nomor,
            'type_id' => $request->jenis,
            'name' => $request->name,
            'pemimpin' => $request->pemimpin,
            'user_id' => $request->user_id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'notulen' => $request->notulensi
        ]);
       



        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/rapat')->with('success', 'Berhasil Menambahkan Data Rapat');

    }

    function detail($id){
        $data = Meeting::where('id', $id)->get();
        $tittle = 'detail rapat';
        return view('halaman_rapat.detail', compact(['data', 'tittle']));
    }
}

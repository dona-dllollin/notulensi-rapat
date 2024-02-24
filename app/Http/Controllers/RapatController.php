<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class RapatController extends Controller
{

    function index(){
        $data = Meeting::all();
        $tittle = "Halaman Tabel Rapat";

        return view('halaman_rapat.index', compact(['data', 'tittle']));
    }

    function tambah(){
        $tittle = 'Tambah Rapat';
        return view('halaman_rapat.tambah', compact('tittle'));
    }

    function detail($id){
        $data = Meeting::where('id', $id)->get();
        $tittle = 'detail rapat';
        return view('halaman_rapat.detail', compact(['data', 'tittle']));
    }
}

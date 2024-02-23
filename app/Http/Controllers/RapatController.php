<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RapatController extends Controller
{
    function tambah(){
        $tittle = 'Tambah Rapat';
        return view('halaman_rapat.tambah', compact('tittle'));
    }
}

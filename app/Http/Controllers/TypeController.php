<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    function index(){
        $tittle = 'Halaman Jenis Rapat';
        $jenis = Type::all();
        $i = 1;

        return view('halaman_jenisrapat.index', compact(['tittle', 'jenis', 'i']));
    }
}

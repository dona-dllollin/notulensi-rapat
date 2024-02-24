<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Barryvdh\DomPDF\Facade\Pdf;

class TypeController extends Controller
{
    function index(){
        $tittle = 'Halaman Jenis Rapat';
        $jenis = Type::all();
        $i = 1;


        return view('halaman_jenisrapat.index', compact(['tittle', 'jenis', 'i']));
    }

    function create( Request $request){
    $request->validate([
        'name' => 'required'
    ],[
        'name.required' => 'Nama Jenis Rapat harus Di isi'
    ]);


    $datajenis = [
        'name' =>$request->name
    ];

    Type::create($datajenis);

    Session::flash('success', 'Data Jenis Rapat Berhasil Di Tambahkan');

    return redirect('/type');
       
    }

    function edit($id){
        $tittle = 'Edit Jenis Rapat';
        $jenis = Type::where('id', $id)->get();
       

        return view('halaman_jenisrapat.edit', compact('jenis', 'tittle'));
    }

    function change(Request $request){

        $type = Type::find($request->id);
        $type->name = $request->name;


        $type->save();
       
       
        Session::flash('success', 'Nama Jenis Rapat berhasil diedit');

        return redirect('/type');
    }

    function delete(Request $request){

        $user = Type::where('id', $request->id )->delete();
        Session::flash('success', 'Jenis Rapat berhasil dihapus');
        return redirect('/type');

    }

    // function export(){
       
    //     $jenis = Type::all();
    //     $data = [

    //         'jenis' => $jenis,
    //         'i' => 1
    //     ];
         
    //     $pdf = Pdf::loadView('halaman_jenisrapat.export', $data);
    //     return $pdf->download('invoice.pdf');
    // }
}

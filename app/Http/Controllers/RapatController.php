<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Type;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RapatController extends Controller
{

    function index(Request $request)
    {
        $query = Meeting::query();

        if ($request->has('type_id')) {
            $query->where('type_id', $request->input('type_id'));
        }
        $data = $query->get();

        $type = Type::all();
        $tittle = "Halaman Tabel Rapat";

        return view('halaman_rapat.index', compact(['data', 'tittle', 'type']));
    }

    function tambah()
    {
        $type = Type::all();
        $tittle = 'Tambah Rapat';
        return view('halaman_rapat.tambah', compact('tittle', 'type'));
    }

    function create(Request $request)
    {

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

    function detail($id)
    {
        $data = Meeting::where('id', $id)->get();
        $tittle = 'detail rapat';
        return view('halaman_rapat.detail', compact(['data', 'tittle']));
    }

    function edit($id)
    {
        $data = Meeting::find($id);
        $type = Type::all();
        $tittle = 'Halaman Edit Rapat';

        return view('halaman_rapat.edit', ['data' => $data, 'type' => $type, 'tittle' => $tittle]);
    }

    function change(Request $request)
    {
        $meeting = Meeting::find($request->id);


        $meeting->nomor = $request->nomor;
        $meeting->type_id = $request->jenis;
        $meeting->name = $request->name;
        $meeting->pemimpin = $request->pemimpin;
        $meeting->user_id = $request->user_id;
        $meeting->tanggal = $request->tanggal;
        $meeting->waktu = $request->waktu;
        $meeting->notulen = $request->notulensi;

        $meeting->save();

        Session::flash('success', 'Data Rapat Berhasil Di ubah');

        return redirect('/detail/rapat/' . $request->id);
    }

    function delete(Request $request)
    {

        $user = Meeting::where('id', $request->id)->delete();
        Session::flash('success', 'Data Rapat Berhasil Dihapus');
        return redirect('/rapat');
    }

    function export($id)
    {

        ini_set('max_execution_time', 3600);
        $rapat = Meeting::find($id);
        $jenis = $rapat->type->name;
        $notulen = $rapat->user->name;
        $tittle = 'halaman ekspor rapat';
        $data = [

            'rapat' => $rapat,
            'jenis' => $jenis,
            'notulen' => $notulen,
            'tittle' => 'halaman ekspor rapat'

        ];

        // return view('halaman_rapat.export', ['rapat' => $rapat, 'jenis' => $jenis, 'notulen' => $notulen, 'tittle' => $tittle ]);

        $pdf = Pdf::loadView('halaman_rapat.export', $data)->setOptions(['defaultFont' => 'Times New Roman, Times, serif']);
        return $pdf->download($rapat->name . '.pdf');
    }
}

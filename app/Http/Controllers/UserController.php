<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function index(){

        $rapat = Meeting::count();
        $jenis = Type::count();
     

        $tittle = 'Halaman User';
        return view('halaman_user.index', compact('tittle', 'jenis', 'rapat'));
    }


    
    function profile($id){
        $user = User::where('id', $id)->get();
        $tittle = 'Halaman Profile';


        return view('halaman_user.profile', compact('user', 'tittle'));

    }

    function edit($id){
    $tittle = 'Halaman Edit Profile';
    $user = User::where('id', $id)->get();

    return view('halaman_user.edit', compact(['user', 'tittle']));
    }

    function change(Request $request)
    {
        $request->validate([
            'gambar' => 'image|file|max:51200',
            'name' => 'required|',
        ], [
            'gambar.image' => 'File Wajib Image',
            'gambar.file' => 'Wajib File',
            'gambar.max' => 'Bidang gambar tidak boleh lebih besar dari 50 mb',
            'name.required' => 'Nama Wajib Di isi',
         
        ]);



        $user = User::find($request->id);

        if ($request->hasFile('gambar')) {
            $gambar_file = $request->file('gambar');
            $foto_ekstensi = $gambar_file->extension();
            $nama_foto = date('ymdhis') . "." . $foto_ekstensi;
            $gambar_file->move(public_path('image/acounts'), $nama_foto);
            $user->gambar = $nama_foto;
        }

        $user->name = $request->name;
        $user->nohp = $request->nohp;
        
        $user->save();

        Session::flash('success', 'User berhasil diedit');

        return redirect('/profile/user/' . $request->id);
    }

}

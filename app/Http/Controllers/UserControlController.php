<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class UserControlController extends Controller
{
    function index(){
        $data = User::all();
        $tittle = 'Halaman User Control';

        return view('halaman_usercontrol.index', compact(['data', 'tittle']));
    }

    function tambah(){
        $tittle = 'Tambah User';
        return view('halaman_usercontrol.tambah', compact('tittle'));
    }

    function create(Request $request){

        $str = Str::random(100);
        $gambar = '';

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'fullname.required' => 'Nama Wajib Di isi',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
            'password.required' => 'Password Wajib Di isi',
            'password.min' => 'Password minimal harus 8 karakter.',
        ]
        );

        if ($request->hasFile('gambar')){
            $request->validate(['gambar' => 'mimes:jpeg,jpg,png,gif|image|file|max:51200'],
        ['gambar.mimes'=>'format gambar invalid', 'gambar.max' => 'Ukuran Gambar maksimal 50 mb']);

        $dataGambar = $request->file('gambar');
        $ekstensiGambar = $dataGambar->extension();
        $namaGambar = date('ymdhis') . "." . $ekstensiGambar;
        $dataGambar->move(public_path('image/acounts'), $namaGambar);
        $gambar = $namaGambar;

        } else {
            $gambar = 'user.png';
        }

        $dataUser = [
            'name' => $request->name,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'password' => $request->password,
            'gambar' => $gambar,
            'verify_key' => $str
        ];

        User::create($dataUser);

        $details = [
            'nama' => $dataUser ['name'],
            'role' => 'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'Laravel10 - Pendaftaran melalui SMTP + Multiuser + CRUD + Sweetalert',
            'url' => 'http://' . request()->getHttpHost() . "/" . "verify/" . $dataUser['verify_key'],
        ];

        Mail::to($request->email)->send(new AuthMail($details));

        Session::flash('success', 'User berhasil ditambahkan , Harap verifikasi akun sebelum di gunakan.');

        return redirect('/usercontrol');
    }

    function edit($id){
    $tittle = 'Halaman Edit User';
    $user = User::where('id', $id)->get();

    return view('halaman_usercontrol.edit', compact(['user', 'tittle']));
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
        
        if ($request->role === 'notulen'){
            $user->role = 'notulen';
        } else {
            $user->role = 'user';
        }
        $user->save();

        Session::flash('success', 'User berhasil diedit');

        return redirect('/usercontrol');
    }

    function delete(Request $request){

        $user = User::where('id', $request->id )->delete();
        Session::flash('success', 'User berhasil dihapus');
        return redirect('/usercontrol');

    }
}

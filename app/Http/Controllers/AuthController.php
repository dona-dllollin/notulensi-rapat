<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    function index(){
        return view('halaman_auth.index');
    }

    function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'email wajib di isi',
            'password.required' => 'Password wajib di isi'
        ]
    );

    $dataLogin = [
        'email' => $request->email,
        'password' => $request->password

    ];

    if(Auth::attempt($dataLogin)){
        if(Auth::user()->email_verified_at !== null){
            if (Auth::user()->role === 'notulen'){
                return redirect()->route('notulen')->with('success', 'Anda Berhasil Login');
                
            } else if (Auth::user()->role === 'user'){
                return redirect()->route('user')->with('success', 'Anda Berhasil Login');
                
            }
        } else {
            Auth::logout();
            return redirect()->route('auth')->withErrors('Akun anda belum aktif, harap verifikasi terlebih dahulu');
        }
        return 'berhasil login';
    } else {
        return redirect()->route('auth')->withErrors('email atau pasword anda salah');
    }

    }

    function create(){
        return view('halaman_auth/register');
    }

    function register(Request $request){

        $str = Str::random(100);
        $request->validate([
            'nama' => 'required',
            'nohp' => 'required|min:11',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ],
            [
                'nama.required' => 'Nama Harus Di isi',
                'nohp.required' => 'Nomor Hp Wajib Diisi',
                'nohp.min' => 'nomor Hp minimal 11 karakter',
                'email.required' => 'email wajib di isi',
                'email.unique' => 'email sudah terdaftar',
                'email.email' => 'Format email tidak valid',
                'password.required' => 'Password harus di isi',
                'password.min' => 'password minimal 8 karater'
        ]);

        if ($request->hasFile('gambar')){
            $request->validate([
                'gambar' => 'mimes:jpeg,jpg,png|image|file'
            ],
            [
                'gambar.mimes' => 'ekstensi gambar harus jpeg, jpg, png',
                'gambar.image' => 'Format gambar salah',
                'gambar.file' => 'format gambar bukan file'
        ]);

        $gambar_file = $request->file('gambar');
        $ekstensi_gambar = $gambar_file->extension();
        $nama_gambar = date('ymdhis') . "." . $ekstensi_gambar;
        $gambar_file->move(public_path('image/acounts').$nama_gambar);

        } else {
        $nama_gambar = "user.png";
        }

        $dataRegister = [
            'name' => $request->nama,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'password' => $request->password,
            'gambar' => $nama_gambar,
            'verify_key' => $str

        ];

  
        User::create($dataRegister);

        $pesan = [
            'nama' => $dataRegister['name'],
            'role' => 'user',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'Notulensi Rapat ISSO',
            'url' => 'http://' . request()->getHttpHost() . "/" . "verify/" . $dataRegister['verify_key']

        ];

        Mail::to($dataRegister['email'])->send(new AuthMail($pesan));

        return redirect()->route('auth')->with('success', 'link verifikasi telah dikirim ke email anda, cek email anda untuk melakukan verifikasi!');


    }

    function verify($verify_key){
        $keyCheck = User::select('verify_key')
        ->where('verify_key', $verify_key)
        ->exists();

        if($keyCheck) {
        $user = User::where('verify_key', $verify_key)->update(['email_verified_at' => date('Y-m-d H:i:s')]);

        return redirect()->route('auth')->with('success', 'verifikasi berhasil, akun anda sudah aktif');
        } else {
            return redirect()->route('auth')->witherrors('akun belum valid, pastikan telah melakukan registrasi di email anda')->withInput();
            
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotulenController;
use App\Http\Controllers\RapatController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserControlController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['guest'])->group(function(){
Route::get('/', [AuthController::class, 'index'])->name('auth');
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'create'])->name('registrasi');
Route::post('/register', [AuthController::class, 'register']);
Route::get('verify/{verify_key}', [AuthController::class, 'verify']);

});


Route::middleware(['auth'])->group(function(){
    Route::redirect('/home', '/notulen');

        // notulen
    Route::get('/notulen', [NotulenController::class, 'index'])->name('notulen');
    Route::get('/profile/notulen/{id}', [NotulenController::class, 'profile']);
    Route::get('/editprofile/{id}', [NotulenController::class, 'edit']);
    Route::post('/editprofile', [NotulenController::class, 'change']);


    // rapat
    Route::get('/rapat', [RapatController::class, 'index'])->name('rapat');
    Route::get('/tambahrapat', [RapatController::class, 'tambah']);
    Route::get('/detail/rapat/{id}', [RapatController::class, 'detail']);


    // jenis rapat
    Route::get('/type', [TypeController::class, 'index'])->name('type');
    Route::get('/tambahtype', [TypeController::class, 'tambah']);
    Route::post('/tambahtype', [TypeController::class, 'create']);
    Route::get('/edit/type/{id}', [TypeController::class, 'edit']);
    Route::post('/edit/type', [TypeController::class, 'change']);
    Route::post('/hapus/type/{id}', [TypeController::class, 'delete']);
    // Route::get('/export', [TypeController::class, 'export'])->name('export');

    
    // user control
    Route::get('/usercontrol', [UserControlController::class, 'index'])->name('usercontrol');
    Route::get('/tambahuc', [UserControlController::class, 'tambah']);
    Route::post('/tambahuc', [UserControlController::class, 'create']);
    Route::get('/edituser/{id}', [UserControlController::class, 'edit']);
    Route::post('/edituser', [UserControlController::class, 'change']);
    Route::post('/hapususer/{id}', [UserControlController::class, 'delete']);
    
    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});


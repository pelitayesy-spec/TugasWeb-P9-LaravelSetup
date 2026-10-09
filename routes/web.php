<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    $mahasiswa = [
        ['nama' => 'Pelita',  'nim' => '12344321', 'jurusan' => 'Teknik Informatika'],
        ['nama' => 'Goji',  'nim' => '67899876', 'jurusan' => 'Sistem Informasi'],
        ['nama' => 'Charles', 'nim' => '54673821', 'jurusan' => 'Ilmu Komunikasi'],
        ['nama' => 'Stella', 'nim' => '98765432', 'jurusan' => 'Manajemen Akuntansi'],
        ['nama' => 'Levi', 'nim' => '12344678', 'jurusan' => 'Teknik Mesin'],
    ];
    return view('home', compact('mahasiswa'));
});

Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

Route::get('/hello/{nama}', [PageController::class, 'hello']);
Route::get('/welcome', function () {
    return view('welcome');
});
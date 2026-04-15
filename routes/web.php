<?php

use Illuminate\Support\Facades\Route;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

Route::post('/kirim-aspirasi', function (Request $request) {
   $request->validate([
        'nis'         => 'required|numeric|digits:10', 
        'kategori_id' => 'required',
        'lokasi'      => 'required',
        'ket'         => 'required',
    ], [
        'nis.digits'  => 'NIS harus tepat 10 angka ya!',
        'nis.numeric' => 'NIS harus berupa angka!',
    ]);

    Aspirasi::create([
        'nis'         => $request->nis, 
        'kategori_id' => $request->kategori_id,
        'lokasi'      => $request->lokasi,
        'ket'         => $request->ket,
        'status'      => 'Menunggu',
    ]);

    return back()->with('success', 'Laporan berhasil dikirim!');
});

Route::get('/', function () {
    return view('welcome');
});

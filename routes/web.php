<?php

use Illuminate\Support\Facades\Route;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

Route::post('/kirim-aspirasi', function (Request $request) {
    Aspirasi::create([
        'nis' => 'required|numeric|digits:10',
        'kategori_id' => $request->kategori_id,
        'lokasi' => $request->lokasi,
        'ket' => $request->ket,
        'status' => 'Menunggu',
    ]);
    return back()->with('success', 'Laporan berhasil terkirim!');
});

Route::get('/', function () {
    return view('welcome');
});

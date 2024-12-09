<?php

namespace App\Http\Controllers;

use App\Models\Pegawai; // Pastikan model Pegawai di-import
use Illuminate\Http\Request;

class Pegawai2Controller extends Controller
{
    public function index()
    {
         // Menampilkan 10 data per halaman
         $pegawais = Pegawai::paginate(10); // Bisa diganti 10 dengan jumlah data per halaman yang diinginkan


        // Mengirim data pegawai ke view
        return view('pegawai2', compact('pegawais'));
    }
}

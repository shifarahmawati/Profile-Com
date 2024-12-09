<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;  // Ganti Karyawan dengan Pegawai
use Illuminate\Http\Request;

class PegawaiController extends Controller  // Ganti KaryawanController dengan PegawaiController
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $pegawais = Pegawai::where('nama_lengkap', 'like', '%' . $search . '%')
                ->orWhere('jabatan', 'like', '%' . $search . '%')
                ->get();
        } else {
            $pegawais = Pegawai::all();
        }

        return view('dashboard', compact('pegawais', 'search'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'pangkat_golongan' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'unitkerja' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
            'no_hp' => 'required|numeric',
        ]);

        // Normalisasi nilai jenis_kelamin
        $validatedData['jenis_kelamin'] = $validatedData['jenis_kelamin'] === 'Laki-laki' ? 'l' : 'p';

        Pegawai::create($validatedData);  // Ganti Karyawan dengan Pegawai

        return redirect()->route('dashboard')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);  // Ganti Karyawan dengan Pegawai
        return view('show', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);  // Ganti Karyawan dengan Pegawai
        return view('edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'pangkat_golongan' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'unitkerja' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string',
        ]);

        // Normalisasi nilai jenis_kelamin
        $validatedData['jenis_kelamin'] = $validatedData['jenis_kelamin'] === 'Laki-laki' ? 'l' : 'p';

        $pegawai = Pegawai::findOrFail($id);  // Ganti Karyawan dengan Pegawai
        $pegawai->update($validatedData);

        return redirect()->route('dashboard')->with('success', 'Data karyawan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);  // Ganti Karyawan dengan Pegawai
        $pegawai->delete();

        return redirect()->route('dashboard')->with('success', 'Data karyawan berhasil dihapus.');
    }

    public function datapegawai()
    {
        // Ambil semua data pegawai dari database
        $pegawais = Pegawai::all();

        // Kirim data pegawai ke view
        return view('data-pegawai', compact('pegawais'));
    
    }
}

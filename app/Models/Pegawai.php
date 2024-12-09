<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pegawai extends Model
{
    use HasFactory;


    // Menentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'pegawai';


    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'pangkat_golongan',
        'unitkerja',
        'jenis_kelamin',
        'alamat',
    ];
}



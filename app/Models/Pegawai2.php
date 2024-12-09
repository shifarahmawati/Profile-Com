<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai2 extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (jika berbeda dari nama model)
    protected $table = 'pegawai';  // Sesuaikan dengan nama tabel di database
}

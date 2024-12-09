<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data; // Sesuaikan dengan model yang digunakan

class DashboardUserController extends Controller
{
    public function index()
    {
        // Hanya ambil data milik pengguna yang sedang login
       

        return view('dashboarduser', compact('data'));
    }
}

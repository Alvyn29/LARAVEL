<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Makanan;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah film dan makanan
        $totalFilm = Film::count();
        $totalMakanan = Makanan::count();

        // Kirim data ke view
        return view('dashboard', compact('totalFilm', 'totalMakanan'));
    }
}

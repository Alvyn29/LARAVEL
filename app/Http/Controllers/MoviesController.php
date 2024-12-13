<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        // Data promo
        $promo = [
            'title' => 'BUY 1 GET 1 FREE TICKET',
            'code' => 'GOODRICH',
            'details' => 'Dapatkan Segera Di CINEMOON',
        ];

        // Harga tiket
        $prices = [
            'regular' => 'Rp. 25.000',
            'vip' => 'Rp. 55.000',
        ];

        // Jam tayang
        $showtimes = ['11.20', '18.10', '13.30', '20.30'];

        // Kirim data ke view
        return view('movies.index', compact('promo', 'prices', 'showtimes'));
    }
}

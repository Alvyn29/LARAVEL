<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table = 'tb_film'; // Nama tabel
    protected $fillable = ['judul_film', 'deskripsi_film', 'harga_film', 'foto_film'];
    protected $primaryKey = 'id_film';

    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }
}

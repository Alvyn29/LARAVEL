<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $table = 'tb_makanan'; // Nama tabel
    protected $fillable = ['name']; // Kolom yang bisa diisi
}

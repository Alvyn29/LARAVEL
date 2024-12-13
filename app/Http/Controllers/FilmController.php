<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        return view('films.create');  // Pastikan ada view untuk form create film
    }

    public function store(Request $request)
    {
        // Validasi data film yang diterima
        $request->validate([
            'judul_film' => 'required',
            'deskripsi_film' => 'required',
            'harga_film' => 'required|numeric',
            'foto_film' => 'required|image',
        ]);

        $film = new Film();
        $film->judul_film = $request->judul_film;
        $film->deskripsi_film = $request->deskripsi_film;
        $film->harga_film = $request->harga_film;

        if ($request->hasFile('foto_film')) {
            $file = $request->file('foto_film');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $film->foto_film = $filename;
        }

        $film->save();

        return redirect()->route('films.index');  // Redirect ke halaman daftar film
    }

    public function pdf()
    {
        $films = Film::all();
        $pdf = Pdf::loadView('pdf', compact('films'));
        return $pdf->download('laporan.pdf');
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('films.edit', compact('film'));
    }


    public function update(Request $request, Film $film)
    {
        // Tambahkan logika untuk update film jika diperlukan
        $request->validate([
            'judul_film' => 'required',
            'deskripsi_film' => 'required',
            'harga_film' => 'required|numeric',
            'foto_film' => 'image',  // Foto opsional, hanya perlu diupdate jika diupload ulang
        ]);

        $film->judul_film = $request->judul_film;
        $film->deskripsi_film = $request->deskripsi_film;
        $film->harga_film = $request->harga_film;

        if ($request->hasFile('foto_film')) {
            // Hapus foto lama jika ada
            if ($film->foto_film) {
                unlink(public_path('images/' . $film->foto_film));
            }

            // Upload foto baru
            $file = $request->file('foto_film');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $film->foto_film = $filename;
        }

        $film->save();

        return redirect()->route('films.index');
    }

    public function destroy(Film $film)
    {
        // Hapus file foto jika ada
        if ($film->foto_film) {
            unlink(public_path('images/' . $film->foto_film));
        }

        $film->delete();

        return redirect()->route('films.index');
    }
}

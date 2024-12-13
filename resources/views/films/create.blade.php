@extends('layout.app')

@section('content')
<div class="container">
    <h1>Tambah Film</h1>
    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul_film">Judul Film</label>
            <input type="text" name="judul_film" id="judul_film" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_film">Deskripsi Film</label>
            <textarea name="deskripsi_film" id="deskripsi_film" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="harga_film">Harga Film</label>
            <input type="number" name="harga_film" id="harga_film" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="foto_film">Foto Film</label>
            <input type="file" name="foto_film" id="foto_film" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection

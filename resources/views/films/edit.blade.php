<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Film</title>
</head>
<body>
    <h1>Edit Film</h1>
    <form action="/films/update/{{ $film->id_film }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="judul_film">Judul Film:</label>
        <input type="text" name="judul_film" id="judul_film" value="{{ $film->judul_film }}" required>
        <br>
        <label for="deskripsi_film">Deskripsi Film:</label>
        <textarea name="deskripsi_film" id="deskripsi_film" required>{{ $film->deskripsi_film }}</textarea>
        <br>
        <label for="harga_film">Harga Film:</label>
        <input type="number" name="harga_film" id="harga_film" value="{{ $film->harga_film }}" required>
        <br>
        <label for="foto_film">Foto Film:</label>
        <input type="file" name="foto_film" id="foto_film">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
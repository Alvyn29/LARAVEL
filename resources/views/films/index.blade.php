<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/stylesD.css') }}">
    <style>
        .widget {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            text-align: center;
        }

        .widget h3 {
            margin: 10px 0;
            color: #333;
        }

        .widget p {
            font-size: 24px;
            color: #4C4CFF;
        }

        .widget-container {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .table th {
            background-color: #4C4CFF;
            color: white;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4C4CFF;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">CINEMOON</div>
            <ul class="menu">
                <li class="active"><a href="{{ route('dashboard') }}" style="color: white; text-decoration: none;">Dashboard</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Transaksi</a></li>
                <li><a href="{{ route('films.index') }}" style="color: white; text-decoration: none;">Data Film</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Data Makanan</a></li>
                <li><a href="#" style="color: black; text-decoration: none;">Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Selamat Datang, {{ Auth::user()->name ?? 'User' }}!</h1>
            </div>
            <button>
                <a href="{{ route('films.create') }}" class="btn">Tambah Film</a>
            </button>
            <button>
                <a href="{{ route('films.pdf') }}" class="btn">Cetak Film</a>
            </button>
            <div class="container">
                
                <table class="table">
                    <thead>
                        <tr>
                           
                            <th>No</th>
                            <th>Judul Film</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($films as $key => $film)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $film->judul_film }}</td>
                            <td>{{ $film->deskripsi_film }}</td>
                            <td>{{ number_format($film->harga_film, 0, ',', '.') }}</td>
                            <td>
                                @if($film->foto_film)
                                <img src="{{ asset('storage/' . $film->foto_film) }}" alt="Foto Film" style="width: 100px; height: auto;">
                                @else
                                <p>Tidak Ada Foto</p>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('films.edit', $film->id_film) }}" class="btn">Edit</a>
                                <form action="{{ route('films.destroy', $film->id_film) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn" style="background-color: red;">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</body>

</html>

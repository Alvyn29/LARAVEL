<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Transaksi</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #0A5EB0;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #CFD2CD;
    }

    .table-data tr:hover {
      background-color: #A9DBB8;
    }
  </style>
</head>

<body>
  <h3>Data Film</h3>
  <table class="table-data">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Film</th>
        <th>Deskripsi</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($films as $film)
      <tr>
        <td>{{ $film->id_film }}</td>
        <td>{{ $film->judul_film }}</td>
        <td>{{ $film->deskripsi_film }}</td>
        <td>{{ $film->harga_film }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="7" align="center">Tidak ada data</td>
      </tr>
      @endforelse
    </tbody>
</body>

</html>


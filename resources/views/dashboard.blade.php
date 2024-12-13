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
        </div>
    </div>
</body>

</html>

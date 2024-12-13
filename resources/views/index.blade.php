<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemoon - Movies</title>
    <link rel="stylesheet" href="{{ asset('css/stylesLP.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="{{ asset('images/moon.png') }}" alt="Cinemoon Logo">
            <span>CINEMOON</span>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="#" class="active">Movies</a></li>
                <li><a href="#">Theaters</a></li>
                <li><a href="#">Food & Beverages</a></li>
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search">
            <button>🔍</button>
        </div>
    </header>

    <!-- Main Section -->
    <main>
        <section class="movies-section">
            <h1 id="movie-title">Movies</h1>
            <div class="movie-nav">
                <button class="btn" id="now-playing">Now Playing</button>
                <button class="btn" id="upcoming">Upcoming</button>
                <button class="btn" id="join-us">Join Us</button>
                <button class="btn" id="ticket-sale">Ticket Sale</button>
            </div>

            <div class="movie-content">
                <div class="promo">
                    <h2>CINEMOON</h2>
                    <p id="promo-message">BUY 1 GET 1 <br> FREE TICKET</p>
                    <div class="promo-code">
                        <img src="../Landing Page/logom.png" alt="promo-code" id="promo-img">
                    </div>
                    <p>KODE PROMO: <span id="promo-code">GOODRICH</span></p>
                    <p>Dapatkan Segera Di <span>CINEMOON</span></p>
                    <small>Syarat & Ketentuan Berlaku</small>
                </div>

                <div class="movie-poster">
                    <img src="goodrich.jpg" alt="Movie Poster" id="movie-poster">
                </div>

                <div class="price">
                    <h2>Price</h2>
                    <p>Regular <span>Rp. 25.000</span></p>
                    <p>VIP <span>Rp. 55.000</span></p>

                    <div class="showtimes">
                        <button class="time">11.20</button>
                    </div>
                    <div class="showtimes">
                        <button class="time">18.10</button>
                    </div>
                    <div class="showtimes">
                        <button class="time">13.30</button>
                    </div>
                    <div class="showtimes">
                        <button class="time">20.30</button>
                    </div>
                    <div id="popup" style="display: none;">
                        <div class="popup-content">
                            <p id="popup-message">This is your pop-up message.</p>
                            <button id="close-popup-btn">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>COPYRIGHT © CINEMOON 2024. ALL RIGHT RESERVED</p>
        <span>CINEMOON</span>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

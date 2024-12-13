<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/stylesL.css') }}">
</head>

<body>
    <div class="container">
        <div class="left-side">
            <h1>CINEMOON</h1>
            <p>Hallo, Sudah Punya Akun?</p>
            <p class="login-now">Login Sekarang Juga!</p>
        </div>
        <div class="right-side">
            <div class="login-box">
                <h2>Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                
                    <div class="buttons">
                        <button type="submit" class="btn signin">Sign In</button>
                        <a href="{{ route('register') }}">
                            <button type="button" class="btn signup">Sign Up</button>
                        </a>
                    </div>
                </form>
                
                @if ($errors->any())
                    <div class="error-message">
                        <p>{{ $errors->first() }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>

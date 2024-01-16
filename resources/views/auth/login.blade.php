<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOSEER</title>
    <link rel="icon" href="landing/images/icon.png" type="image/png">
    <link rel="stylesheet" href="{{ asset('/landing/css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class=""></div>
    <section class="portal">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="title">
                <h1>GOSEER LOGIN</h1>
            </div>
           
            <div class="input-field">
                <input type="text" id="username" name="email" placeholder=" ">
                <label for="username">Nama Pengguna</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" name="password" placeholder=" ">
                <label for="password">Kata Sandi</label>
                <img id="show-hide-pass" src="{{ asset('assets/show-eye.svg') }}" alt="">
            </div>
            <a href="#" id="forgot-pass">Forgot Password</a>
            <button type="submit" id="signin">Sign in</button>
            <p id="signup">
                Tidak mempunyai akun?
                <a href="{{ route('register') }}">Daftar Disini</a>
            </p>
        </form>
    </section>
</body>
</html>

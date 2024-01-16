
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="{{ asset('landing/images/icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('landing/css/login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <section id="register">
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="portal">
                <div class="title">
                    <h1>Pendaftaran GOSEER</h1>
                    <p>Selamat Datang! Mohon isi kolom di bawah.</p>
                </div>

                <div class="input-field">
                    <input id="name" placeholder="Nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Nama Pengguna" name="username" required />
                </div>
                <div class="input-field">
                    <input placeholder="Kata Sandi" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="input-field">
                    <input placeholder="Konfirmasi Kata Sandi" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="input-field">
                    <select type="text" class="form-control @error('role') is-invalid @enderror" name="role" required autocomplete="role">
                        <option value="pemilik_toko">Pemilik</option>
                        <option value="karyawan">Karyawan</option>
                        <option value="agent">Agent</option>
                    </select>
                </div>
                <button type="submit" id="signin" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
                <p id="signup">
                    Sudah mempunyai akun?
                    <a href="{{ route('login') }}">Masuk Disini</a>
                </p>
            </div>
        </form>
    </section>
</body>

</html>
@push('addon-script')
   <script>
    function tampilkanForm() {
        var pilihan = document.getElementById("pilihan").value;
      var formInput = document.getElementById("formInput");

  if (pilihan.value == 'pemilik') {
    formInput.style.display = "block";
      } else {
        formInput.style.display = "none";
      }
}

    </script> 
@endpush
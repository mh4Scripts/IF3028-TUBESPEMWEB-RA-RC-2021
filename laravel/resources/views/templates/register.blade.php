<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- JUDUL HALAMAN WEBSITE --}}
    <title>Daftar - LAPOR!!</title>
    <meta name="description" content="Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA adalah sarana interaktif Sivitas akademika ITERA berbasis media sosial pertama untuk pengawasan dan...">

    {{-- WEBSITE ICON --}}
    <link rel="icon" type="image/png" href="media/icons/speaker.png" sizes="32x32">
    <link rel="icon" type="image/png" href="media/icons/speaker.png" sizes="16x16">
    <meta name="application-name" content="LAPOR!">
    <meta name="theme-color" content="#ffffff">

    {{-- STYLE --}}
    <link rel="stylesheet" href="css/style.css">
</head>

<body  class="registration-page">
    <div class="logo-area">
        <div class="main-web-logo">
            <img src="media/logos/speaker_logo.png" alt="Website Logo">
            <h2>LAPOR!!</h2>
        </div>
    </div>

    <div class="form-area">
        <div class="form-card">
            <div class="form-card-header">
                <h1>Daftar</h1>
            </div>
            <div class="form-card-desc">
                <h4>Silakan masukkan data diri anda</h4>
            </div>
            <div class="form-card-content">
                <form action="" class="input-form" method="post">
                    <div class="row">
                        <input  class="input-text" type="text" name="name" id="name" placeholder="Nama lengkap" autocomplete="off">
                    </div>
                    <div class="row">
                        <input  class="input-email" type="email" name="email" id="email"    placeholder="Alamat e-mail" autocomplete="off">
                        <input  class="input-text" type="text" name="username" id="username" placeholder="Nama pengguna" autocomplete="off">
                    </div>
                    <div class="row">
                        <input  class="input-password" type="password" name="password" id="password" placeholder="Kata sandi">
                        <input  class="input-password" type="password" name="passConf" id="passConf" placeholder="Konfirmasi kata sandi">
                    </div>
                    <div class="row">
                        <button class="submit-btn" type="submit" name="regist">
                            DAFTAR
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <a href="{{ route('home') }}">
            <h5>KEMBALI KE HALAMAN UTAMA</h5>
        </a>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
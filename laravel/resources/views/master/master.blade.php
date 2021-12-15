<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- JUDUL HALAMAN WEBSITE --}}
    <title>LAPOR! - Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA</title>
    <meta name="description" content="Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA adalah sarana interaktif Sivitas akademika ITERA berbasis media sosial pertama untuk pengawasan dan...">

    {{-- WEBSITE ICON --}}
    <link rel="icon" type="image/png" href="media/icons/speaker.png" sizes="32x32">
    <link rel="icon" type="image/png" href="media/icons/speaker.png" sizes="16x16">
    <meta name="application-name" content="LAPOR!">
    <meta name="theme-color" content="#ffffff">

    {{-- STYLE --}}
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    {{-- BACKGROUND --}}
    <img src="media/images/top-background.jpg"    alt="home-cover" class="top-background"> 
    <img src="media/images/bottom-background.svg" alt="home-cover" class="bottom-background">

    {{-- NAV HEADER --}}
    <header>
        <div class="nav-header">
            <a href="{{ route('home') }}" class="web-logo">
                <span><img src="media/logos/speaker_logo.png" alt="Website Logo"></span>
                <h2>LAPOR!!</h2>
            </a>
            <a href="{{ route('about') }}" class="nav-header-links">
                <h3>Buat Laporan</h3>
            </a>
            <a href="{{ route('about') }}" class="nav-header-links">
                <h3>Semua Laporan</h3>
            </a>
            <a href="{{ route('about') }}" class="nav-header-links">
                <h3>Tentang LAPOR!!</h3>
            </a>

            {{-- PROFILE --}}
            @yield('profile')

        </div>
    </header>

    <div class="web-hero">
        <h2>Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA</h2><br>
        <h3>Bersama ciptakan lingkungan ITERA yang berintegritas</h3>
    </div>

    {{-- CONTENT --}}
    @yield('content')

    <footer>

    </footer>
    <div class="LoginModalBG" id="LoginModal">
        <div class="LoginModalContainer">
            <div class="LoginModalHeader">
                <span class="closeLoginModal">&times;</span>
                <h2>Masuk</h2>
            </div>
            <div class="LoginModalContent">
                <div class="form-card-content">
                    <h4>Silakan masukkan informasi login anda</h4>
                    <form action="" class="input-form" method="post">
                        <div class="row">
                            <input  class="input-email" type="email" name="email" id="email"    placeholder="Alamat e-mail" autocomplete="off">
                        </div>
                        <div class="row">
                            <input  class="input-password" type="password" name="password" id="password" placeholder="Kata sandi">
                        </div>
                        <div class="row">
                            <button class="submit-btn" type="submit" name="regist">
                                MASUK
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="LoginModalFooter">
                <h4>Anda belum memiliki akun?</h4>
                <a href="{{ route('register') }}"><h3>DAFTAR SEKARANG</h3></a>
            </div>
        </div>        
    </div>

    <script src="js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    {{-- JUDUL HALAMAN WEBSITE --}}
    <title>  {{ $title }} </title>
    <meta name="description" content="Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA adalah sarana interaktif Sivitas akademika ITERA berbasis media sosial pertama untuk pengawasan dan...">

    {{-- WEBSITE ICON --}}
    <link rel="icon" type="image/png" href="{{ asset('media/icons/speaker.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('media/icons/speaker.png') }}" sizes="16x16">
    <meta name="application-name" content="LAPOR!">
    <meta name="theme-color" content="#ffffff">

    {{-- STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    

</head>

<body>
    @yield('additional-BG')

    @yield('message')
    {{-- NAV HEADER --}}
    <header>
        <div class="nav-header">
            <div class="nav-header-links-container">
                <a href="{{ route('home') }}" class="web-logo">
                    <span><img src="{{ asset('media/logos/speaker_logo.png') }}" alt="Website Logo"></span>
                    <h2>LAPOR!!</h2>
                </a>
                <a href="{{ route('create') }}" class="nav-header-links">
                    <h3>Buat Laporan</h3>
                </a>
                <a href="{{ route('show') }}" class="nav-header-links">
                    <h3>Semua Laporan</h3>
                </a>
                <a href="{{ route('about') }}" class="nav-header-links">
                    <h3>Tentang LAPOR!!</h3>
                </a>
            </div>
            <div class="nav-header-profile-container">
                {{-- PROFILE --}}
                @yield('profile')
            </div>
        </div>
    </header>

    <div class="page-content">

        {{-- CONTENT --}}
        @yield('content')
    
        <footer class="footer">
            <div class="footer-contents">
                <div class="footer-content">
                    <h4>Tim pengembang</h4>
                    <div class="content-footer-content">
                        <a href="" target="_blank" data-title="Markus Togi">
                            <img class="PP" src="{{ asset('media/images/Pasfoto_Togi.jpg') }}" alt="">
                        </a>
                        <a href="" target="_blank" data-title="Gusti Hafizah">
                            <img class="PP" src="{{ asset('media/images/Pasfoto_Gusti.jpg') }}" alt="">
                        </a>
                        <a href="" target="_blank" data-title="Muhammad Farhan">
                            <img class="PP" src="{{ asset('media/images/Anonim.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="footer-content">
                    <h4>Dinaungi oleh</h4>
                    <div class="content-footer-content">
                        <a href="https://www.itera.ac.id" target="_blank" data-title="Institut Teknologi Sumatera">
                            <img src="{{ asset('media/images/Logo_ITERA.png') }}" alt="" >
                        </a>
                        <a href="http://if.itera.ac.id" target="_blank" data-title="Teknik Informatika ITERA">
                            <img src="{{ asset('media/images/IF_ITERA.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="footer-content">
                    <h4>Alat dan teknologi digunakan</h4>
                    <div class="content-footer-content">
                        <a href="https://laravel.com" target="_blank" data-title="Laravel">
                            <img src="{{ asset('media/images/Laravel_Logo.png') }}" alt="">
                        </a>
                        <a href="https://www.apachefriends.org/index.html" target="_blank" data-title="XAMPP">
                            <img src="{{ asset('media/images/Xampp_Logo.png') }}" alt="">
                        </a>
                        <a href="https://www.flaticon.com" target="_blank" data-title="Flaticon">
                            <img src="{{ asset('media/images/Flaticon_Logo.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-links">
                <a href="{{ route('home') }}">BERANDA</a>
                <a href="{{ route('about') }}">TENTANG KAMI</a>
                <a href="">HUBUNGI KAMI</a>
            </div>
            <h4>Copyright 2021. <span><a class="copyright" href="http://if.itera.ac.id" target="_blank">Teknik Informatika ITERA.</a></span>  Hak cipta dilindungi Undang-Undang.</h4>
        </footer>
    </div>

    {{-- LOGIN MODAL --}}
    <div class="LoginModalBG" id="LoginModal">
        <div class="LoginModalContainer">
            <div class="LoginModalHeader">
                <span class="closeLoginModal" onclick="closeLoginModal()">&times;</span>
                <h2>Masuk</h2>
            </div>
            <div class="LoginModalContent">
                <div class="form-card-content">
                    <h4>Silakan masukkan informasi login anda</h4>
                    <form action="/" class="input-form" method="post">
                        @csrf
                        <div class="row">
                            <input  class="input-email @error('email') invalid @enderror" type="email" name="email" id="email" placeholder="Alamat e-mail" autocomplete="off" value="{{ old('email') }}">
                            @error('email')
                                <span class="error-warning">!</span>
                                <div class="login-error-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <input  class="input-password @error('password') invalid @enderror" type="password" name="password" id="password" placeholder="Kata sandi">
                            @error('password')
                                <span class="error-warning">!</span>
                                <div class="login-error-message">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <button class="submit-btn" type="submit" name="login">
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

    @yield('additional-element')

    
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    @yield('additional-script')
</body>
</html>
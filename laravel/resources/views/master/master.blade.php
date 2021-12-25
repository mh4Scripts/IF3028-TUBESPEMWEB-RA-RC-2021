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

    @if(session()->has('successReg'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('successReg') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>
    @endif

    @if(session()->has('LoginError'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer Warning-Alert">
                <h4>{{ session('LoginError') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif

    @if(session()->has('loginRequired'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer Warning-Alert">
                <h4>{{ session('loginRequired') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif

    @if(session()->has('LoginSuccess'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('LoginSuccess') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif

    @if(session()->has('logoutSuccess'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('logoutSuccess') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif

    @if(session()->has('successReport'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('successReport') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif

    @if(session()->has('successUpdate'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('successUpdate') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif

    @if(session()->has('successDelete'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('successDelete') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>    
    @endif
    
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
                @auth
                    <div class="profile-menu">
                        <div onclick="ProfileFunction()" class="profile-menu-btn">{{ auth()->user()->uname }}</div>
                        <div id="profileMenu" class="profile-menu-content">
                            <a target="_blank" href="">Profil</a>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                            {{-- <a href="{{ route('home') }}">Logout</a> --}}
                        </div>
                    </div>
                    <div class="user-profile-picture">
                        {{-- {{ asset('media/icons/speaker.png') }} --}}
                        <img src="{{ asset('/'. auth()->user()->prof_pic) }}" alt="">
                    </div>
                @else
                    <a class="userLog" id="clickLogin" onclick="showLoginModal()"><h3>Masuk</h3></a>
                    <a href="{{ route('register') }}" class="userReg"><h3>Daftar</h3></a>
                @endauth
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
                        <a href="https://github.com/Gusti119140086" target="_blank" data-title="Gusti Hafizah">
                            <img class="PP" src="{{ asset('media/profile_pictures/Pasfoto_Gusti.jpg') }}" alt="">
                        </a>
                        <a href="https://github.com/MarkusTogi24" target="_blank" data-title="Markus Togi">
                            <img class="PP" src="{{ asset('media/profile_pictures/Pasfoto_Togi.jpg') }}" alt="">
                        </a>
                        <a href="https://github.com/farhanandani" target="_blank" data-title="Muhammad Farhan">
                            <img class="PP" src="{{ asset('media/profile_pictures/Pasfoto_Farhan.jpg') }}" alt="">
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
                            <input  class="input-email @error('email') invalid @enderror" type="email" name="email" id="email" placeholder="Alamat e-mail" onkeyup="validateEmail()" autocomplete="off" value="{{ old('email') }}">
                            @error('email')
                                <span class="error-warning"      id="SEMEW">!</span>
                                <div class="login-error-message" id="SEMEM">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="error-warning"    id="EMEW">X</span>
                            <div  class="login-rt-error-message" id="EMEM"></div>
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
    <script type="text/javascript"> // Real Time Login Form Validation
        function validateEmail(){
            let Email = document.getElementById("email");
            let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            
            let errorMessage   = document.getElementById("EMEM");
            let errorWarning   = document.getElementById("EMEW");

            if (document.body.contains(document.getElementById("SEMEM"))){
                document.getElementById("SEMEM").style.visibility="hidden";
                document.getElementById("SEMEW").style.visibility="hidden";
            }

            if(!(Email.value.match(pattern))){
                errorMessage.innerHTML          = "Gunakan format email yang benar";
                errorMessage.style.visibility   = "visible";
                errorWarning.style.visibility   = "visible";
            }else{
                errorMessage.style.visibility   = "hidden";
                errorWarning.style.visibility   = "hidden";
            }
        }
    </script>

    @yield('additional-script')

</body>
</html>
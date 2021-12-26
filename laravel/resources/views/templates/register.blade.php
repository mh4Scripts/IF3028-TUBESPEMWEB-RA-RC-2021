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
        <link rel="icon" type="image/png" href="{{ asset('media/icons/speaker.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('media/icons/speaker.png') }}" sizes="16x16">
        <meta name="application-name" content="LAPOR!">
        <meta name="theme-color" content="#ffffff">

        {{-- STYLE --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body  class="registration-page">
        <div class="logo-area">
            <div class="main-web-logo">
                <img src="{{ asset('media/logos/speaker_logo.png') }}" alt="Website Logo">
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
                    <form action="/daftar-akun" class="input-form" method="post">
                        @csrf
                        <input type="hidden" name="prof_pic" id="prof_pic" value="media/images/Anonim.jpg">
                        <div class="row">
                            <input  class="input-text @error('name') invalid @enderror" type="text" name="name" id="name" placeholder="Nama lengkap" autocomplete="off" onkeyup="validateName()" value="{{ old('name') }}">
                            @error('name')
                                <span class="error-warning" id="SNAEW">X</span>
                                <div class="error-message"  id="SNAEM">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="error-warning"    id="NAEW">X</span>
                            <span class="valid-indicator"  id="NAVI">✔</span>
                            <div  class="rt-error-message" id="NAEM"></div>
                        </div>
                        <div class="row">
                            <input class="input-email @error('email') invalid @enderror" type="email" name="email" id="email" placeholder="Alamat e-mail" autocomplete="off" onkeyup="validateEmail()"  value="{{ old('email') }}">
                            @error('email')
                                <span class="left-error-warning" id="SEMEW">X</span>
                                <div class="error-message"       id="SEMEM">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="left-error-warning"    id="EMEW">X</span>
                            <span class="left-valid-indicator"  id="EMVI">✔</span>
                            <div  class="rt-error-message"      id="EMEM"></div>

                            <input class="input-text @error('uname') invalid @enderror" type="text" name="uname" id="uname" placeholder="Nama pengguna" autocomplete="off" onkeyup="validateUname()" value="{{ old('uname') }}">
                            @error('uname')
                                <span class="error-warning"      id="SUNEW">X</span>
                                <div class="right-error-message" id="SUNEM">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="error-warning"          id="UNEW">X</span>
                            <span class="valid-indicator"        id="UNVI">✔</span>
                            <div  class="rt-right-error-message" id="UNEM"></div>

                        </div>
                        <div class="row">
                            <input  class="input-password @error('password') invalid @enderror"  type="password" name="password" id="password" autocomplete="off" onkeyup="validatePass()" placeholder="Kata sandi">
                            @error('password')
                                <span class="left-error-warning" id="SPAEW">X</span>
                                <div class="error-message"       id="SPAEM">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="left-error-warning"   id="PAEW">X</span>
                            <span class="left-valid-indicator" id="PAVI">✔</span>
                            <div  class="rt-error-message"     id="PAEM"></div>

                            <input  class="input-password @error('passConf') invalid @enderror"  type="password" name="passConf" id="passConf" autocomplete="off" onkeyup="validatePassConf()" placeholder="Konfirmasi kata sandi">
                            @error('passConf')
                                <span class="error-warning"      id="SPCEW">X</span>
                                <div class="right-error-message" id="SPCEM">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="error-warning"          id="PCEW">X</span>
                            <span class="valid-indicator"        id="PCVI">✔</span>
                            <div  class="rt-right-error-message" id="PCEM"></div>
                            
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

        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

        <script type="text/javascript">
            function validateName(){
                let Name = document.getElementById("name");

                let errorMessage   = document.getElementById("NAEM");
                let errorWarning   = document.getElementById("NAEW");
                let validIndicator = document.getElementById("NAVI");

                if (document.body.contains(document.getElementById("SNAEM"))){
                    document.getElementById("SNAEM").style.visibility="hidden";
                    document.getElementById("SNAEW").style.visibility="hidden";
                }

                if (Name.value.length <= 0){
                    Name.className                  = "input-text invalid";
                    errorMessage.innerHTML          = "Nama harus diisi";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else if(Name.value.length <= 4){
                    Name.className                  = "input-text invalid";
                    errorMessage.innerHTML          = "Minimal terdiri dari 5 karakter";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else{
                    Name.className                  = "input-text valid";
                    errorMessage.style.visibility   = "hidden";
                    errorWarning.style.visibility   = "hidden";
                    validIndicator.style.visibility = "visible";
                }
            }
            async function validateEmail(){
                let Email = document.getElementById("email");
                let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

                let EmailAddress = Email.value;
                if (EmailAddress == ""){
                    EmailAddress = "a"
                }
                let URL = 'check-email/' + EmailAddress;
                let Comparison_Result   = await fetch(URL, { method : 'get' });
                let Bool_Result         = await Comparison_Result.text();
                
                let errorMessage   = document.getElementById("EMEM");
                let validIndicator = document.getElementById("EMVI");
                let errorWarning   = document.getElementById("EMEW");

                if (document.body.contains(document.getElementById("SEMEM"))){
                    document.getElementById("SEMEM").style.visibility="hidden";
                    document.getElementById("SEMEW").style.visibility="hidden";
                }

                if (Email.value.length <= 0){
                    Email.className                 = "input-email invalid";
                    errorMessage.innerHTML          = "Email harus diisi";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else if(!(Email.value.match(pattern))){
                    Email.className                 = "input-email invalid";
                    errorMessage.innerHTML          = "Gunakan format email yang benar";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else if(Bool_Result.length > 3){
                    Email.className                 = "input-email invalid";
                    errorMessage.innerHTML          = "Email sudah digunakan";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else{
                    Email.className                 = "input-email valid";
                    errorMessage.style.visibility   = "hidden";
                    errorWarning.style.visibility   = "hidden";
                    validIndicator.style.visibility = "visible";
                }
            }
            async function validateUname(){
                let Uname = document.getElementById("uname");

                let userName = Uname.value;
                if (userName == ""){
                    userName = "a";
                }
                let URL = 'check-uname/' + userName;
                let Comparison_Result   = await fetch(URL, { method : 'get' });
                let Bool_Result         = await Comparison_Result.text();
                
                let errorMessage   = document.getElementById("UNEM");
                let validIndicator = document.getElementById("UNVI");
                let errorWarning   = document.getElementById("UNEW");
                
                if (document.body.contains(document.getElementById("SUNEM"))){
                    document.getElementById("SUNEM").style.visibility="hidden";
                    document.getElementById("SUNEW").style.visibility="hidden";
                }

                if (Uname.value.length <= 0){
                    Uname.className                 = "input-text invalid";
                    errorMessage.innerHTML          = "Nama pengguna harus diisi";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else if(Uname.value.length <= 4){
                    Uname.className                 = "input-text invalid";
                    errorMessage.innerHTML          = "Minimal terdiri dari 5 karakter";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else if(Bool_Result.length > 3){
                    Uname.className                 = "input-text invalid";
                    errorMessage.innerHTML          = "Nama pengguna sudah digunakan";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else{
                    Uname.className                 = "input-text valid";
                    errorMessage.style.visibility   = "hidden";
                    errorWarning.style.visibility   = "hidden";
                    validIndicator.style.visibility = "visible";
                }
            }
            function validatePass(){
                let Password       = document.getElementById("password");

                let errorMessage   = document.getElementById("PAEM");
                let validIndicator = document.getElementById("PAVI");
                let errorWarning   = document.getElementById("PAEW");

                if (document.body.contains(document.getElementById("SPAEM"))){
                    document.getElementById("SPAEM").style.visibility="hidden";
                    document.getElementById("SPAEW").style.visibility="hidden";
                }

                if (Password.value.length <= 0){
                    Password.className              = "input-password invalid";
                    errorMessage.innerHTML          = "Kata sandi harus diisi";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else if(Password.value.length <= 4){
                    Password.className              = "input-password invalid";
                    errorMessage.innerHTML          = "Minimal terdiri dari 5 karakter";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else{
                    Password.className              = "input-password valid";
                    errorMessage.style.visibility   = "hidden";
                    errorWarning.style.visibility   = "hidden";
                    validIndicator.style.visibility = "visible";
                }
            }
            function validatePassConf(){
                let Password       = document.getElementById("password");
                let PasswordConf   = document.getElementById("passConf");

                let errorMessage   = document.getElementById("PCEM");
                let validIndicator = document.getElementById("PCVI");
                let errorWarning   = document.getElementById("PCEW");
                
                if (document.body.contains(document.getElementById("SPCEM"))){
                    document.getElementById("SPCEM").style.visibility="hidden";
                    document.getElementById("SPCEW").style.visibility="hidden";
                }

                if (Password.value != PasswordConf.value){
                    PasswordConf.className          = "input-password invalid";
                    errorMessage.innerHTML          = "Kata sandi tidak sama";
                    errorMessage.style.visibility   = "visible";
                    errorWarning.style.visibility   = "visible";
                    validIndicator.style.visibility = "hidden";
                }else{
                    PasswordConf.className          = "input-password valid";
                    errorMessage.style.visibility   = "hidden";
                    errorWarning.style.visibility   = "hidden";
                    validIndicator.style.visibility = "visible";
                }   
            }
        </script>
    </body>
</html>
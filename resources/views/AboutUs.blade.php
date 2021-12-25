@extends ('layout/main')
@section ('container')
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>    
            </header>

            <div class="laporan">

            <h2>About Us</h2><hr>
            <p>SIMPLE LAPOR adalah aplikasi web seperti lapor untuk mengumpulkan laporan/komentar terkait layanan di program studi teknik informatika ITERA. 
                Website ini menggunakan PHP framework yaitu Laravel. Database yang digunakan adalah MariaDB/MYSQL. Pengguna dapat membuat komentar/laporan, mencari laporan-laporan dan komentar terdahulu,
                serta menghapus komentar/laporan.
            </p><br>
            <h2>The Team</h2><hr>
            <div class="row">
                <div class="kolom">
                    <div class="profil">
                        <figure>
                            <img src="image\ilham.jpeg">
                        </figure>
                        <figcaption>
                            Ilham Nofri Yandra<br>119140133<br>
                        </figcaption>
                    </div>
                </div>
                
                <div class="kolom">
                    <div class="profil">
                        <figure>
                            <img src="image\laras.jpeg">
                        </figure>
                        <figcaption>
                            Nurul Aulia Larasati<br>119140008<br>
                        </figcaption>
                    </div>
                </div>

                <div class="kolom">
                    <div class="profil">
                        <figure>
                            <img src="image\nesa.jpg">
                        </figure>
                        <figcaption>
                            Nesa Oktavia<br>119140091<br>
                        </figcaption>
                    </div>
                </div>                
            </div>
            <br><hr><br>
            </div>
        </div>
@endsection
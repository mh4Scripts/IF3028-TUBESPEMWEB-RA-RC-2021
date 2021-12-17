<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/Css/fix.css">
        <title>Lapor</title>
    </head>

    <body>
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>
            </header>
            <div class="laporan">
                Buat Laporan/Komentar<br>
            <hr>
            <br>
                <textarea class="komen" rows="20" cols="110" placeholder="Laporan/Komentar"></textarea>
                <br><br>
                <div class="custom-select">
                    <select>
                        <option hidden>Pilih Aspek Pelaporan/Komentar</option>
                        <option value="1">Keuangan</option>
                        <option value="2">Dosen</option>
                        <option value="3">Tenaga Kependidikan</option>
                        <option value="4">Mahasiswa/i</option>
                        <option value="5">Program Studi</option>
                        <option value="6">Keamanan</option>
                        <option value="7">Infrastruktur</option>
                    </select>
                </div>
                <br>
                <form action="google.com">
                    <input type="file" multiple><br><br>
                    <button type="submit" class="submit">Buat LAPOR!</button>
                </form>
                <br><br><br><br><hr><br>
            </div>
        </div>
    </body>

    <footer>
        <div class="about">
            <a href="/AboutUs">About Us</a> | 
            <a href="/utama">Home</a>
        </div>
        <p class="copyright">
            © Copyright 2021 Tubes. Pengweb.
        </p>
    </footer>
</html>

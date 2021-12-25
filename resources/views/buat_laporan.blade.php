<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/buat_laporan_style.css">
    <title>Form Lapor</title>
</head>

<body>
    <div class="mainBlock">
        <div class="content">
            <div class="header">
                <h1>[-LAPORIN-]</h1>
                <h2>Aplikasi Web Tempat Ngelaporin Keresahan Lu</h2>
            </div><br>
            Buat laporan/komentar
            <hr>
            <br>
            <textarea class="textArea" name="laporan" placeholder="Laporan/Komentar"></textarea>
            <br><br>
            <select class="select" name="aspek">
                <option>Pilih Aspek Pelaporan/Komentar</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Administrasi">Administrasi</option>
                <option value="Kehilangan">Kehilangan</option>
                <option value="Akademik">Akademik</option>
                <option value="Organisasi">Organisasi</option>
            </select>
            <br><br>
            <input type="file" name="bukti">
            <br><br>
            <button class="btn" type="submit"> Buat Laporan</button>
        </div>
    </div>
</body>

</html>
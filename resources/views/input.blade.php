<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/input.css">
</head>
<body>
<div class="container">
    <h2>SIMPLE LAPOR!</h2>
    <div class="main">

        <p>Buat Laporan/Komentar</p>
        <hr>

        <form action="/prosesdata" method="post" enctype="multipart/form-data" >
            <textarea name="komentar" id="komentar">Laporan/Komentar</textarea>

            <select id="aspek" name="aspek">
                <option selected value="">Pilih Aspek Pelaporan/Komentar</option>
                <option value="Pengaduan">Pengaduan</option>
                <option value="Aspirasi">Aspirasi</option>
                <option value="Permintaan Informasi">Permintaan Informasi</option>
            </select>

            <input type="file" name="file">

            <div class="tombol">
                <button type="submit">Buat Lapor!</button>
            </div>
            <hr>
        </form>
    </div>
</div>
</body>
</html>
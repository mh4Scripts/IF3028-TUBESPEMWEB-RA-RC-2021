<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Lapor</title>
</head>

<body>
    <h1>LAPORIN</h1>
    <br>
    Buat laporan/komentar
    <hr>
    <br>
    <textarea name="laporan" placeholder="Laporan/Komentar"></textarea>
    <br>
    <select name="aspek">
        <option>Pilih Aspek Pelaporan/Komentar</option>
        <option value="Infrastruktur">Infrastruktur</option>
        <option value="Administrasi">Administrasi</option>
        <option value="Kehilangan">Kehilangan</option>
        <option value="Akademik">Akademik</option>
        <option value="Organisasi">Organisasi</option>
    </select>
    <br>
    <input type="file" name="bukti">
    <br>
    <button type="submit"> Buat Laporan</button>
</body>

</html>
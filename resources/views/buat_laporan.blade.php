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
    <form action="/tambah" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mainBlock">
            <div class="content">
                <div class="header">
                    <h1>[-LAPORIN-]</h1>
                    <h2>Aplikasi Web Tempat Ngelaporin Keresahan Lu</h2>
                </div><br>
                Buat laporan/komentar
                <hr>
                <br>
                <label>Pengirim: <label><input type="text" name="pengirim">
                <br><br>
                <label>Penerima: <label><input type="text" name="penerima">
                <br><br>
                <textarea class="textArea" name="laporan" placeholder="Laporan/Komentar"></textarea>
                <br><br>
                <select class="select" name="aspek">
                    <option>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
                <br><br>
                <input type="file" name="lampiran">
                <br><br>
                <button class="btn" type="submit" onclick="validate();"> Buat Laporan</button>
            </div>
        </div>
    </form>
    <script>
        function validate(){
            let pengirim = document.getElementById("pengirim");
            let penerima = document.getElementById("penerima");
            let pesan = document.getElementById("pesan");
            let aspek = document.getElementById("aspek");
            let lampiran = document.getElementById("lampiran");
            if(pesan.value.replace(/\s+/g, '').length<=20){
                alert("Harap masukkan pesan lebih dari 20 kata");
                event.preventDefault();
            }
            if(pengirim.value==""||penerima.value==""||pesan.value==""||aspek.value==""||lampiran.value==""||){
                alert("Harap isi seluruh form dengan lengkap");
                event.preventDefault();
            }
        }
    </script>
</body>

</html>
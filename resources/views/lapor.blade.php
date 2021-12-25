<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/lapor.css">

        <title>
            SIMPLE LAPOR!
        </title>

        <script>
            function validateForm() {
            var x = document.forms["formlaporan"]["laporan"]["aspek"]["fileupload"].value;
            if (x == "" || x == null) {
                alert("Setiap field pada form tidak boleh kosong");
                return false;
                }
            }
        </script>

    </head>

    <body>

        <h1>SIMPLE LAPOR!</h1>

        <form method="POST" id="formlaporan" action="{{ route('store') }}" onsubmit="return validateForm()" enctype="multipart/form-data">
           
            @csrf

            <p><b>Buat Laporan/Komentar</b></p>
            <hr>

            <input type="text" class="judul" name="judul" placeholder="Judul Laporan" required/><br>
            <input type="text" class="pelapor" name="pelapor" placeholder="Nama Pelapor" required/>
            <textarea name="laporan" placeholder="Laporan/Komentar" id="laporan" rows="18" cols="151" required minlength="20"></textarea>

            <select name="aspek">

                <option value="">Pilih Aspek Pelaporan/Komentar</option>
                <option value="dosen">Dosen</option>
                <option value="staff">Staff</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="infrastruktur">Infrastruktur</option>
                <option value="pengajaran">Pengajaran</option>

            </select><br>

            <input type="file" id="fileupload" name="fileupload" class="fileupload"><br>
            <input type="submit" class=submit-btn value="Buat LAPOR!"><br><br><br>
            <hr>

        </form>

    </body>
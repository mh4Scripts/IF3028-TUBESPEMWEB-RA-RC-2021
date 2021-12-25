<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="form_page.css">
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

        <style>
        
            * 
            {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            h1{
                font-style: normal;
                font-weight: normal;
                font-size: 60px;
                color: black;
                text-align: center;
                margin-bottom: 100px;
            }  

            body 
            {
                margin:50px 100px 100px 100px;
                font-size: medium;
            }

            hr 
            {
                margin-top: 20px;
                margin-bottom: 25px;
                border: none;
                height: 1px;
                color: black;
                background-color: black;
            }

            input
            {
                margin-bottom: 5px;
            }

            textarea 
            {
                font-size: medium;
                border : 1.5px solid black;
                padding: 12px;
                margin-top: 15px;
            }

            select 
            {
                font-size: medium;
                padding: 12px;
                margin-top: 20px;
                border: 1.5px solid black;
                cursor: pointer;
            }

            .fileupload 
            {
                margin-top: 20px;
                cursor: pointer;
            }

            .submit-btn 
            {
                float: right;
                padding: 12px;
                margin-top: 20px;
                background-color: white;
                cursor: pointer;
                border: 1.5px solid black;
            }

            .judullaporan 
            {
                font-size: medium;
                padding: 12px;
                border: 1.5px solid black;
                margin-bottom: 20px;
            }

            .namapelapor 
            {
                font-size: medium;
                padding: 12px;
                border: 1.5px solid black;
                margin-bottom: 20px;
            }

        </style>

    </head>

    <body>

        <h1>SIMPLE LAPOR!</h1>

        <form method="POST" id="formlaporan" action="{{ route('update', $posts->id) }}" onsubmit="return validateForm()" enctype="multipart/form-data">
           
            @csrf
            @method('PUT')

            <p>Buat Laporan/Komentar</p>
            <hr>

            <input type="text" class="judul" name="judul" placeholder="Judul Laporan" required value="{{ $posts->judul }}"/><br><br>
            <input type="text" class="pelapor" name="pelapor" placeholder="Nama Pelapor" required value="{{ $posts->pelapor }}"/>
            <textarea name="laporan" placeholder="Laporan/Komentar" id="laporan" rows="18" cols="151" required minlength="20">{{ old('laporan', $posts->laporan) }}</textarea>
            
            <select name="aspek">
                <option value="">Pilih Aspek Pelaporan/Komentar</option>
                <option value="dosen" {{ $posts->aspek == "dosen" ? 'selected':'' }}>Dosen</option>
                <option value="staff" {{ $posts->aspek == "staff" ? 'selected':'' }}>Staff</option>
                <option value="mahasiswa" {{ $posts->aspek == "mahasiswa" ? 'selected':'' }}>Mahasiswa</option>
                <option value="infrastruktur" {{ $posts->aspek == "infrastruktur" ? 'selected':'' }}>Infrastruktur</option>
                <option value="pengajaran" {{ $posts->aspek == "pengajaran" ? 'selected':'' }}>Pengajaran</option>
            </select><br>

            <input type="file" id="fileupload" name="fileupload" class="fileupload" value="{{ $posts->fileupload }}"><br>
            <input type="submit" class=submit-btn value="Buat LAPOR!"><br><br><br>
            <hr>

        </form>

    </body>
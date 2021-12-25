<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/form_page.css">
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
        <form method="POST" id="formlaporan" action="{{ route('update', $posts->id) }}" onsubmit="return validateForm()" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <p>Buat Laporan/Komentar</p>
            <hr>
            <input type="text" class="judul" name="judul" placeholder="Judul Laporan" required value="{{ $posts->judul }}"/>
            <br>
            <input type="text" class="pelapor" name="pelapor" placeholder="Nama Pelapor" required value="{{ $posts->pelapor }}"/>
            <textarea name="laporan" placeholder="Laporan/Komentar" id="laporan" rows="18" cols="151" required minlength="20">{{ old('laporan', $posts->laporan) }}</textarea>

            <select name="aspek">
                <option value="">Pilih Aspek Pelaporan/Komentar</option>
                <option value="dosen" {{ $posts->aspek == "dosen" ? 'selected':'' }}>Dosen</option>
                <option value="staff" {{ $posts->aspek == "staff" ? 'selected':'' }}>Staff</option>
                <option value="mahasiswa" {{ $posts->aspek == "mahasiswa" ? 'selected':'' }}>Mahasiswa</option>
                <option value="infrastruktur" {{ $posts->aspek == "infrastruktur" ? 'selected':'' }}>Infrastruktur</option>
                <option value="pengajaran" {{ $posts->aspek == "pengajaran" ? 'selected':'' }}>Pengajaran</option>
            </select>
            <br>
            <input type="file" id="fileupload" name="fileupload" class="fileupload" value="{{ $posts->fileupload }}">
            <br>
            <input type="submit" class=submit-btn value="Simpan LAPOR!">
            <br><br><br>
            <hr>
        </form>
    </body>
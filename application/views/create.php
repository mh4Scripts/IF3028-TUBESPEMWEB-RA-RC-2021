<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    
        <title>Tambah Laporan</title>
        <link rel="stylesheet" href="<?php echo base_url('style/create_style.css') ?>">
        <script type="text/javascript" src="<?php echo base_url('asset/script.js') ?>"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="content">
                <h1>BUAT LAPORAN</h1>
                <br>
                <form name="tambah_form" method="POST" onsubmit="return validasi()">
                    <p>Buat Laporan/Komentar</p>
                    <hr><br>
                    <div>
                        <textarea name="isi" placeholder="Laporan/Komentar" class="textarea"></textarea>
                    </div><br>
                    <div>
                        <select name="aspek" class="select">
                            <option>Pilih Aspek Pelaporan/Komentar</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Staff">Staff</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Infrastruktur">Infrastruktur</option> 
                            <option value="Pengajaran">Pengajaran</option> 
                        </select>
                    </div>
                    <div>
                        <br>
                        <input type="file" name="lampiran" class="file">
                    </div>
                    <br>
                    <button type="submit" class="btn_tambah" style="color: black; background-color: #FAAA8C; border-radius: 10px;">BUAT LAPOR!</button>
                    <hr><br><br>
                </form>
            </div>
        </div>
    </body>
</html>

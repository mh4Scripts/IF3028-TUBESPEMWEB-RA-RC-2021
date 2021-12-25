<!DOCTYPE html>
<html>

<head>
    <title>SIMPLE LAPOR!</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <ul>
        <li><a href="/tentang lapor">Tentang Lapor</a></li>
        <li><a href="/cari aduan">Cari Aduan</a></li>
        <li><a href="/kontak">Kontak</a></li>
    </ul>
    <center>
        <h1>Buat Laporan</h1>
        <center>
            <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
                <section class="base">
                    <div>
                        <label>Laporan/Komentar</label>
                        <input type="textarea" name="nama_produk" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Pilih Aspek Pelaporan/Komentar</label>
                        <select name="deskripsi">
                            <option value="Dosen">Dosen</option>
                            <option value="Staff">Staff</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Infrastruktur">Infrastruktur</option>
                            <option value="Pengajaran">Pengajaran</option>
                        </select>
                    </div>
                    <div>
                        <label>Lampiran</label>
                        <input type="file" name="gambar_produk" required="" />
                    </div>
                    <div>
                        <button type="submit">Lapor!</button>
                    </div>
                </section>
            </form>
</body>

</html>
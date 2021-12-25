@extends ('layout/main')
@section ('container')
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>
            </header>
            <div class="laporan">
                Buat Laporan/Komentar<br>
            <hr>
            <br>
            <form id="form" name="forme" onsubmit="return validasi()" action="/utama" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="teks">
                    <div id="name_div">
                        <input type="text" id="nama" name="nama" class="teks" placeholder="Nama Pelapor">
                    </div>
                    <div id="info1"></div>
                    <br><br>
                    <div id="judul_div">
                        <input type="text" id="judul" name="judul" class="teks" placeholder="Judul Laporan/Komentar">
                    </div>
                    <div id="info2"></div>
                    <br><br>
                    <div id="pesan_div">
                        <textarea id = "pesan" name = "pesan" class="komen" rows="20" cols="110" placeholder="Laporan/Komentar"></textarea>
                    </div>
                    <div id="info3"></div>
                    <br><br>
                </div>
                <div class="custom-select">
                    <select id = 'aspek' name = 'aspek'>
                        <option hidden>Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option> 
                    </select>
                </div>
                <div class="error"></div>
                <br>
                    <input id="file" name="file" type="file"><div class="error"></div><br><br>
                    <button type="submit" class="submit">Buat LAPOR!</button>
                </form>
                <br><br><br><br><hr><br>
            </div>
        </div>
 @endsection

    
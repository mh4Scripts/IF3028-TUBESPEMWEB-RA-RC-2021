<section>
    <div class="container">
        <h1 class="head">SIMPLE LAPOR!</h1>
        <a>Buat Laporan/komentar</a>
        <hr> <br>
    
        <form id="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-judul">
                <input id="judul" class="judul" type="text" placeholder="Judul" name="judul">
                <div class="pesan"></div>
            </div>

            <div class="kalimat">
                <textarea id="laporan" rows="25" cols="100" placeholder="Laporan/komentar" name="laporan" ></textarea>
                <div class="pesan"></div>
            </div>
            
            <div class="form-aspek">
                <select id="aspek" class="aspek" name="aspek" >
                    <option value="" selected disabled hidden>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Staff">Staff</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Infrastruktur">Infrastruktur</option>
                    <option value="Pengajaran">Pengajaran</option>
                </select>
                <div class="pesan"></div>
            </div>
    
            <div class="lampiran">
                <input type="file" id="lampiran" name="lampiran">
                <div class="pesan"></div>
            </div>
            
    
            <button class="laporbtn" type="submit" class="tombol" >Buat Laporan</button>
        </form>
        <br>
        <hr>
        </div>
        
</section>
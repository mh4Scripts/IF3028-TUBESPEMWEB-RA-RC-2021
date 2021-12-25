@extends ('layout/main')
@section ('container')
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>
            </header>
            <div class="laporan">
                Edit Laporan/Komentar<br>
            <hr>
            <br>
            <form id="form" action="/ubah/{{ $data->id }}" onsubmit="return validasi()" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="teks">
                    <input type="text" id="nama" name="nama" class="teks" placeholder="Nama Pelapor" value = "{{ $data -> nama }}">
                    <div id="info1" class="error"></div>
                    <br><br>
                    <input type="text" id="judul" name="judul" class="teks" placeholder="Judul Laporan/Komentar" value ="{{ $data -> judul }}">
                    <div id="info2" class="error"></div>
                    <br><br>
                    <textarea id = "pesan" name = "pesan" class="komen" rows="20" cols="110" placeholder="Laporan/Komentar">{{ $data -> pesan }}</textarea>
                    <div id="info3" class="error"></div>
                    <br>
                </div>
                <div class="custom-select">
                    <select id = 'aspek' name = 'aspek'>
                        <option value="0">Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Staff">Staff</option>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="Pengajaran">Pengajaran</option> 
                    </select>
                </div>
                <div id="info4" class="error"></div>
                <br>
                    <input id="file" name="file" type="file" onchange="return cekExt()">
                    <div id="info5" class="error"></div>
                    <br><br>
                    <img src= "{{ URL::to ('/') }}/file/{{ $data -> file  }}"><br>
                    <input id="hidden_file" name="hidden_file" type="hidden" value ="{{ $data -> file }}">
                    <br><br><br>
                    <a href="/detail/{{ $data->id }}">
                        <button class="batal" type="button"> Batal </button>
                    </a>
                    <button type="submit" class="submit">Simpan</button>
                </form>
                <br><br><br><br><hr><br>
            </div>
</div>
        </div>
 @endsection

    
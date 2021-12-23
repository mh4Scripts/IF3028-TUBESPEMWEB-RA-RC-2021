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
            <form id="form" action="/ubah/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="teks">
                    <input type="text" id="nama" name="nama" class="teks" placeholder="Nama Pelapor" value = "{{ $data -> nama }}">
                    <div class="error"></div>
                    <br><br>
                    <input type="text" id="judul" name="judul" class="teks" placeholder="Judul Laporan/Komentar" value ="{{ $data -> judul }}">
                    <div class="error"></div>
                    <br><br>
                    <textarea id = "pesan" name = "pesan" class="komen" rows="20" cols="110" placeholder="Laporan/Komentar">{{ $data -> pesan }}</textarea>
                    <div class="error"></div>
                    <br><br>
                </div>
                <div class="custom-select">
                    <select id = 'aspek' name = 'aspek' value ="{{ $data -> aspek }}">
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
                    <input id="file" name="file" type="file" ><div class="error">
                    <img src= "{{ URL::to ('/') }}/file/{{ $data -> file  }}">
                    <input id="hidden_file" name="hidden_file" type="hidden" value ="{{ $data -> file }}"><div class="error">
                    </div><br><br>
                    <a href="/detail/{{ $data->id }}">
                        <button type="button"> batal </button>
                    </a>
                    <button type="submit" class="submit">Simpan</button>
                </form>
                <br><br><br><br><hr><br>
            </div>
        </div>
 @endsection

    
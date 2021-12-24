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
            <form id="form" action="/utama" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="teks">
                    <input type="text" id="nama" name="nama" class="teks @error ('nama') 
                    is-invalid @enderror" placeholder="Nama Pelapor" value="{{old('nama')}}"> 
                    @error('nama')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    <br><br>
                    <input type="text" id="judul" name="judul" class="teks" placeholder="Judul Laporan/Komentar" value="{{old('nama')}}">
                    <div class="error"></div>
                    @error('judul')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br><br>
                    <textarea id = "pesan" name = "pesan" class="komen" rows="20" cols="110" placeholder="Laporan/Komentar">{{old('pesan')}}</textarea>
                    @error('pesan')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br><br>
                </div>
                <div class="custom-select">
                    <select id = 'aspek' name = 'aspek'>
                        <option value="0" selected disabled>Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Dosen" {{ old('aspek') == "Dosen" ? 'selected' : '' }}>Dosen</option>
                        <option value="Staff" {{ old('aspek') == "Staff" ? 'selected' : '' }}>Staff</option>
                        <option value="Mahasiswa" {{ old('aspek') == "Mahasiswa" ? 'selected' : '' }}>Mahasiswa</option>
                        <option value="Infrastruktur" {{ old('aspek') == "Infrastruktur" ? 'selected' : '' }}>Infrastruktur</option>
                        <option value="Pengajaran" {{ old('aspek') == "Pengajaran" ? 'selected' : '' }}>Pengajaran</option> 
                    </select>
                </div>
                @error('aspek')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="error"></div>
                <br>
                    <input id="file" name="file" type="file"><div class="error"></div>
                    @error('file')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <br><br>
                    <button type="submit" class="submit" onclick="coba()">Buat LAPOR!</button>
                </form>
                <br><br><br><br><hr><br>
            </div>
        </div>
 @endsection

    
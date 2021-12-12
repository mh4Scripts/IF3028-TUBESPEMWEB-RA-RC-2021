@extends('layouts.default')
@section('content')
<section>
    <div class="container">
        <h1 class="head">Simple Lapor!</h1>
        <a>Buat Laporan/komentar</a>
        <hr> <br>
    
        <form action="/lapor" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="kalimat">
                <textarea id="laporan" rows="25" cols="100" placeholder="Laporan/komentar" name="laporan" class="@error('laporan') is-invalid @enderror"> </textarea>
                @error('laporan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <select class="opt" name="aspek" class="@error('aspek') is-invalid @enderror">
                <option value="" selected disabled hidden>Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option>
                @error('aspek')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </select>
    
            <div class="">
                <input type="file" id="lampiran" name="lampiran" class="@error('lampiran') is-invalid @enderror">
                @error('lampiran')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
    
            <button class="laporbtn" type="submit" class="tombol">Buat Laporan</button>
        </form>
        <br>
        <hr>
        </div>
</section>
@endsection
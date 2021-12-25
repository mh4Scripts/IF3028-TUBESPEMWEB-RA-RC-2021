@extends('layouts.default')
@section('content')
<section>
    <div class="container">
        <h1 class="head">SIMPLE LAPOR!</h1>
        <a>Edit Laporan/komentar</a>
        <hr> <br>
    
        <form id="form" action="/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-judul">
                <input id="judul" class="judul" type="text" placeholder="Judul" name="judul" value="{{ $data->judul }}">
                <div class="pesan"></div>
            </div>
            
            <div class="kalimat">
                <textarea id="laporan" rows="25" cols="110" placeholder="Laporan/komentar" name="laporan" >{{ $data->laporan }}</textarea>
                <div class="pesan"></div>
            </div>


            <div class="form-aspek">
                <select id="aspek" class="aspek" name="aspek" value="">
                    <option value="" selected disabled hidden>Pilih Aspek Pelaporan/Komentar</option>
                    <option value="Dosen" {{ $data->aspek == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                    <option value="Staff" {{ $data->aspek == 'Staff' ? 'selected' : '' }}>Staff</option>
                    <option value="Mahasiswa" {{ $data->aspek == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                    <option value="Infrastruktur" {{ $data->aspek == 'Infrastruktur' ? 'selected' : '' }}>Infrastruktur</option>
                    <option value="Pengajaran" {{ $data->aspek == 'Pengajaran' ? 'selected' : '' }}>Pengajaran</option>
                </select>
                <div class="pesan"></div>
            </div>
    
            <div class="lampirann">
                <input type="file" id="lampiran" name="lampiran">
                <input type="hidden" id="hidden_lampiran" name="hidden_lampiran" value="{{ $data->lampiran }}">
                <div class="pesan"></div>
            </div>
    
            <button class="laporbtn" type="submit" class="tombol" >Edit Laporan</button>
        </form>
        <br>
        <hr>
        </div>
        @stack('before-validation')
        @include('includes.validation')
        @stack('after-validation')
</section>
@endsection
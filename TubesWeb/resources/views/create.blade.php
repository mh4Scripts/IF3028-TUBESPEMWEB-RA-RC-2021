@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <p>Buat Laporan/Komentar</p>
        <hr>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <textarea name="" id="" cols="30" rows="10" placeholder="Laporan/Komentar"></textarea> <br>
        <select name="" id="" class="classic"> 
            <option value="">Pilih Aspek Pelaporan/Komentar</option>
            <option value="">Dosen</option>
            <option value="">Staff</option>
            <option value="">Mahasiswa</option>
            <option value="">Infrastruktur</option>
            <option value="">Pengajar</option>
        </select> <br>
        <div class="button-wrap">
            <label class ="new-button" for="upload"> Choose File
            <input id="upload" type="file" >
        </div>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10 right">
        <button type="submit" class="btn-submit">Buat LAPOR!</button>
    </div>
    <div class="col-1"></div>
</div>

<div class="row garis-bawah">
    <div class="col-1"></div>
    <div class="col-10">

        <hr>
    </div>
    <div class="col-1"></div>
</div>
@endsection
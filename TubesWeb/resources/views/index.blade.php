@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-1"></div>
    <div class="col-10 center">
        <input type="text"> <button class="cari">Cari</button>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-12 center">
        <p>Buat Laporan/Komentar</p>
    </div>
</div>

{{-- ISI --}}
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <p>Laporan/komentar Terakhir</p>
        <hr>
    </div>
    <div class="col-1"></div>
</div>

{{-- loop laporan --}}
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur provident voluptas eum ducimus, voluptatibus aut quod a iusto laboriosam consectetur atque omnis quibusdam ipsa iure sint iste odio! Harum, placeat?</p>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-6">
        <p>Lampiran : gambar.jpg</p>
    </div>
    <div class="col-4">
        <p>waktu : 20-11-2019 20:00 <a href="#">Lihat Selengkapnya</a></p>
    </div>
    <div class="col-1"></div>
</div>
<div class="row garis">
    <div class="col-1"></div>
    <div class="col-10">
        <hr>
    </div>
    <div class="col-1"></div>
</div>
{{-- end loop --}}
<div class="row">
    <div class="col-12 center titik">
        <p>.</p>
        <p>.</p>
        <p>.</p>
        <br>
        <p>.</p>
        <p>.</p>
        <p>.</p>
    </div>
</div>
@endsection
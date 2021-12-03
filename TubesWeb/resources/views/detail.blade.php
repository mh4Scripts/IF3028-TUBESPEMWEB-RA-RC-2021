@extends('layouts.master')
@section('content')

<div class="row sub-head">
    <div class="col-1"></div>
    <div class="col-10">
        <p>Detail Laporan/Komentar</p>
        <hr>
    </div>
    <div class="col-1"></div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur provident voluptas eum ducimus, voluptatibus aut quod a iusto laboriosam consectetur atque omnis quibusdam ipsa iure sint iste odio! Harum, placeat?</p>
    </div>
    <div class="col-1"></div>
</div>

<div class="row lampiran">
    <div class="col-1"></div>
    <div class="col-4">
        <p>Lampiran :</p><br>
        <img src="{{asset('assets/images/file.png')}}" alt="">
    </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-7">
        <p>waktu : 20-11-2019 20:00  Aspek: Infrastruktur</p>
    </div>
    <div class="col-3 right">
        <p><a href="#">Hapus Laporan/Komentar</a></p>
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
@endsection
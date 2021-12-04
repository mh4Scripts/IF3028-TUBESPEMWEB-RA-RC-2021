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
        <p class="laporan">{{$report->laporan}}</p>
    </div>
    <div class="col-1"></div>
</div>

<div class="row lampiran">
    <div class="col-1"></div>
    <div class="col-4">
        <p>Lampiran :</p><br>
        <img src="{{asset('assets/images/'.$report->lampiran) ?? asset('assets/images/file.png')}}" alt="">
    </div>
</div>

<div class="row">
    <div class="col-1"></div>
    <div class="col-7">
        <p>waktu : {{date('d-m-Y H:i', strtotime($report->created_at))}} &ensp; Aspek: {{$report->aspek}}</p>
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
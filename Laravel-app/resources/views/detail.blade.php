@extends('template.template')

@section('title')
    Detail
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('js/ajax.js') }}">
@endsection

@section('content')

<div id="javas">
    <div class="judul">
        <h1 onclick="location.href='/'">SIMPLE LAPOR !</h1>
    </div>

    <div class="main-content">
        <p class="judulHF">Detail Laporan/Komentar</p>
        <hr>

        <p id="isiLaporan">
            {{ $data->laporan }}
        </p>

        <p id="lampiran">Lampiran : {{ $data->lampiran }} </p>
        <br>
        <img src="" alt="Lampiran-gambarr">

        <div id="footer">
            <div class="judulHF">
                <p class>Waktu : {{ $data->created_at->format('d/m/Y H:i:s') }}&nbsp;&nbsp;Aspek : {{ $data->aspek }}</p>
                <!-- <p class="elemen">Aspek :{}</p> -->

                <form id="form" action="/delete/{{ $data->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a class="elemen" href="/edit/{{ $data->id }}">Edit</b></a>
                    <a class="elemen" href="/delete/{{ $data->id }}">Delete</a>
                </form>
                {{-- <a class="elemen" href="#">Hapus Laporan/Komentar <b>x</b></a> --}}
            </div>
            <hr>
        </div>
    </div>
</div>


@endsection
@extends("layouts.data_raw")

@section("list-content")
    <a class="laporan-header" href='/laporan/{{ $posts->id }}'>{{ $posts->judul }}</a>

    <p class="laporan-body">{{ $posts->deskripsi }}</p>

    <div class="list-lampiran">
        <p class="laporan-lampiran">Lampiran : <a href="{{ $posts->lampiran }}">{{ $posts->lampiran }}</a> </p>
        @if(str_contains($posts->lampiran, '.jpg'))         
            <img  src="{{ $posts->lampiran }}" width="300px" height="300px">
        @elseif(str_contains($posts->lampiran, '.pdf'))
            <embed src="{{ $posts->lampiran }}" width="300px" height="300px">
        @elseif(str_contains($posts->lampiran, '.doc'))
            <embed src="{{ $posts->lampiran }}" width="300px" height="300px">
        @else
            <p>format tidak didukung</p>
        @endif
    </div>

    <div class="list-nav">
        <span class="aspek">Waktu: {{ $posts->waktu }}</span>
        <span>Aspek: {{ $posts->aspek }}</span>
        <span class="nav1">
            <a  href="#">Update | </a>
            <a  href="/list" onclick="return confirm('Ingin menghapus data ?')">Hapus Laporan/Komentar</a>
        </span>
    </div>
    <hr>
@endsection
@extends("layouts.data_raw")

@section("list-content")
    <p>{{ $posts->deskripsi }}</p>

    <div class="list-lampiran">
        <p>Lampiran : </p>

        <img src="{{ $posts->lampiran }}" width="300px" height="300px">
    </div>

    <div class="list-nav">
        <span class="aspek">Waktu: {{ $posts->waktu }}</span>
        <span>Aspek: {{ $posts->aspek }}</span>
        <span class="nav1">
            <a  href="#">Update | </a>
            <a  href="#" onclick="return confirm('Ingin menghapus data ?')">Hapus Laporan/Komentar</a>
        </span>
    </div>

    <hr>
@endsection
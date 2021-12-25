@extends("layouts.data_raw")

@section("list-content")
    <a class="laporan-header" href='/laporan/{{ $posts->id }}'>{{ $posts->judul }}</a>

    <p class="laporan-body">{{ $posts->deskripsi }}</p>

    <div class="list-lampiran">
        <p class="laporan-lampiran">Lampiran : <a href="{{ $posts->lampiran }}">{{ $posts->lampiran }}</a> </p>

        <img src="{{ $posts->lampiran }}" width="300px" height="300px">
    </div>

    <div class="laporan-footer">
        <p class="footer-item">Aspek : <span>{{ $posts->aspek }}</span></p>
        <p class="footer-item">Waktu : <span>{{ $posts->waktu }}</span></p>
        <div class="laporan-action">
            <a href="#" class="update-button">Update</a>
            <a href="#" class="delete-button" onclick="return confirm('Ingin menghapus data ?')">Hapus Laporan</a>
        </div>
    </div>
    <hr>
@endsection
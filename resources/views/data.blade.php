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

    <div class="laporan-footer">
        <p class="footer-item">Aspek : <span>{{ $posts->aspek }}</span></p>
        <p class="footer-item">Waktu : <span>{{ $posts->waktu }}</span></p>
        <div class="laporan-action">
            <a href="/ubah/{{ $posts->id }}" class="update-button">Update</a>
            <a href="/hapus/{{ $posts->id }}" class="delete-button" onclick="return confirm('Ingin menghapus data ?')">Hapus Laporan</a>
        </div>
    </div>
    <hr>
@endsection
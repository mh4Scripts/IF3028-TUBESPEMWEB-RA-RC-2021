@extends("layouts.home_raw")

@section("laporan-item")
    @foreach ($posts as $post)
        <div class="laporan-item">
            <a class="laporan-header" href='/laporan/{{ $post->id }}'>{{ $post->judul }}</a>
            <p class="laporan-body">{{ $post->deskripsi }}</p>

            <p class="laporan-lampiran">Lampiran : <a href="/public/{{ $post->lampiran }}">{{ $post->lampiran }}</a> </p>

            <div class="laporan-footer">
            <p class="footer-item">Aspek : <span>{{ $post->aspek }}</span></p>
                <p class="footer-item">Waktu : <span>{{ $post->waktu }}</span></p>
            </div>
        </div>
        <hr>
    @endforeach
@endsection

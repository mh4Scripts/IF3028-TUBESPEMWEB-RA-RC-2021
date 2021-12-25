@extends("layouts.home_raw")

@section("laporan-item")
    @foreach ($posts as $post)
        <div class="laporan-item">
            <p class="laporan-header"><a href='/laporan/{{ $post->id }}'>{{ $post->judul }}</a></p>
            <p class="laporan-body">{{ $post->deskripsi }}</p>

            <p class="laporan-lampiran">Lampiran : <a href="linktolampiran">{{ $post->lampiran }}</a> </p>

            <div class="laporan-footer">
            <p class="footer-item">Aspek : <span>{{ $post->aspek }}</span></p>
                <p class="footer-item">waktu : <span>{{ $post->waktu }}</span></p>
            </div>
        </div>
        <hr>
    @endforeach
@endsection
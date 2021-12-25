@extends('layouts.default')
@section('content')
<section>
    <h1>SEARCH RESULT</h1>
    <div class="container">
        <form class="search" type="get" action="{{ url('/search') }}">
            <input type="text" placeholder="search..." class="field" name="search">
            <button class="btn" type="submit">
                <table>
                    <tr>
                        <th>
                            <img class="srch" src="assets/search.png" alt="" height="22px" >
                        </th>
                        <th>
                            <p>Search</p>
                        </th>
                    </tr>
                </table>
            </button>
        </form>
        <p>Hasil pencarian dari kata '<i><b>{{ $search_text }}</b></i>'</p>
        <br>
        @if (count($data) != 0)
            @foreach ($data as $item)
            <div class="item">
                <p><b>{{ $item->judul }}</b></p>
                <br>
                <p>{{ Str::limit($item->laporan, 450) }}</p>
                <br>
                <p>Aspek : {{ $item->aspek }}</p>
                <br>
                <div class="keterangan">
                    <p>Lampiran : {{ $item->lampiran }}</p>
                    <div class="selengkapnya">
                        <p>Waktu : {{ $item->created_at }}</p>
                        <a href="/preview/{{ $item->id }}">Lihat Selengkapnya ></a>
                    </div>
                </div>
                <hr>
                <br>
            </div>
            @endforeach
        @else
            <p>Tidak ditemukan!</p>
        @endif
        
    </div>
</section>       
@endsection
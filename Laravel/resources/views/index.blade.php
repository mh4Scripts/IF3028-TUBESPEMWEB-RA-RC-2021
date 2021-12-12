@extends('layouts.default')
@section('content')
<section>
    <div class="container">
        <div class="container-head">
            <h1>SIMPLE LAPOR!</h1>
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
            <div class="lapor">
                <table>
                    <tr>
                        <th>
                            <a href="/lapor">Buat Laporan/Komentar</a>   
                        </th>
                        <th>
                            <a href="/lapor"><img src="assets/add.png" alt=""> </a>
                        </th>
                    </tr>
                </table>
                
            </div>
            
            <p>Laporan/Komentar Terakhir</p>
            <br>
            <hr>
        </div>
        <div class="container-body">
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
        </div>
        <div class="container-footer">
            <p>
                &#9679 <br> &#9679 <br> &#9679
            </p>
            {{ $data->links() }}
            <p>
                &#9679 <br> &#9679 <br> &#9679
            </p>
        </div>
    </div>
</section>       
@endsection
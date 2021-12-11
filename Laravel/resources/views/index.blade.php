<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Lapor</title>
</head>
<body>
    <div class="container">
        <div class="container-head">
            <h1>SIMPLE LAPOR!</h1>
            <form class="search" type="get" action="{{ url('/search') }}">
                <input type="text" placeholder="search..." name="search">
                <button type="submit">Search</button>
            </form>
            <a href="/lapor">Buat Laporan/Komentar</a>
            <p>Laporan/Komentar Terakhir</p>
            <hr>
        </div>
        <div class="container-body">
            @foreach ($data as $item)
                <p>{{ $item->laporan }}</p>
                <p>{{ $item->aspek }}</p>
                {{-- <img src="{{ URL::to('/') }}/lampiran/{{ $item->lampiran }}" alt="{{ $item->lampiran }}" width="250px"> --}}
                <p>Lampiran : {{ $item->lampiran }}</p>
                <p>Waktu : {{ $item->created_at }}</p>
                <a href="/preview/{{ $item->id }}">Lihat Selengkapnya ></a>
                <br>
                <hr>
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
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>search</h1>
    <div class="container">
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
</body>
</html>
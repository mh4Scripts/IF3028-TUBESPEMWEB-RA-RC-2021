<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link rel="stylesheet" href="/css/index_style.css">
</head>

<body>
    <div class="mainBlock">
        <div class="content">
            <div class="header">
                <h1>[-LAPORIN-]</h1>
                <h2>Aplikasi Web Tempat Ngelaporin Keresahan Lu</h2>
            </div>
            <input type="text" class="fieldCari">
            <button type="submit"><img src="{{ ('img/cari.png')}}" height="15px"> Cari</button>
            <br><br>
            <a href="/buat_laporan">Buat laporan/komentar +</a>
            <br>
            Laporan/Komentar Terakhir
            <hr>
            @foreach ($data as $item)
                <br>
                <p><b>Pengirim: </b>{{$item['pengirim']}}
                <p><b>Penerima: </b>{{$item['penerima']}}
                <p>{{$item['pesan']}}<p>
                <br>
                <p>Lampiran: {{$item['lampiran']}}    Waktu: {{$item['waktu']}} <a href="/detail?id={{$item['id']}}">Lihat Selengkapnya<img src="{{ ('img/next.png')}}" height="10px"></a><p>
                <hr>
            @endforeach
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/detail_page.css">
    <title>
        SIMPLE LAPOR!
    </title>
</head>

<body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Detail Laporan/Komentar</p>
    <hr>
    <p>
        {{$posts->judul}} oleh {{$posts->pelapor}}
    </p>
    <p>
        {{ $posts->laporan }}
    </p>

    <div class="lampiran">
        Lampiran :
        <!-- {{ $posts->fileupload}} -->
        <img src="{{ asset('/storage/ .$posts->fileupload')}}">

    </div>

    <div class="keterangan1">
        <div class="keterangan2">

            <div class="waktu">
                Waktu : {{ $posts->created_at->format('d-m-Y H:i') }}
            </div>

            <div class=" aspek">
                Aspek : {{ $posts->aspek }}
            </div>

            <div class="editlaporan">
                <a href="{{ route('edit',$posts->id) }}">
                    Edit Laporan/Komentar
                    <img src="/edit.png">
            </div>

            <div class="hapuslaporan">
                <a href="{{ route('destroy',$posts->id) }}">
                    Hapus Laporan/Komentar
            </div>
        </div>
    </div>
    <hr>
</body>
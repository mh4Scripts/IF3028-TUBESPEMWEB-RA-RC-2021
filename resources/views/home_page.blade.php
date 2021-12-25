<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home_page.css">
    <title>
        SIMPLE LAPOR!
    </title>
</head>

<body>
    <h1>SIMPLE LAPOR!</h1>
    <form class="search" action="/search">
        <input type="text" placeholder="Search.." name="search" value=" {{request('search')}} ">
        <button type="submit" class=searchbutton>
            <img src="search.png">
            Cari
        </button>
    </form>
    <div class="buatlaporan">
        <a href="{{ route('create') }}">Buat Laporan/Komentar</a>
    </div>

    <div class="daftarlaporan">
        Laporan/Komentar Terakhir

        <hr>
        @foreach ($posts as $p)

        <!--p> contoh <br> contoh <br> contoh </p-->
        {{ $p->judul }} oleh {{ $p->pelapor }}
        <br><br>
        {{ $p->laporan }}
        <div class="keterangan1">
            <div class="keterangan2">
                <div class="lampiran">
                    Lampiran : {{ $p->fileupload }}
                </div>

                <div class="waktu">
                    Waktu : {{ $p->created_at->format('d-m-Y H:i') }}
                </div>

                <div class="selengkapnya">
                    <a href="{{ route('show', $p->id) }}">
                        Lihat Selengkapnya
                        <img src="arrow_forward_ios.png">
                    </a>
                </div>
            </div>
        </div>
        <hr>
        @endforeach

    </div>
</body>

</html>
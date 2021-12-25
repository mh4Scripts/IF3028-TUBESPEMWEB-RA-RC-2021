<!DOCTYPE html>
<html>

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">

        <title>SIMPLE LAPOR!</title>

    </head>

    <body>

        <p>SIMPLE LAPOR!</p>
        
        <div class="searchbar">

            <input type="text" placeholder="Search....">
            <button type="submit" class=searchbutton>
                <img src="search.png">Cari
            </button>

        </div>
        
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
                                Lihat Selengkapnya<img src="arrow_forward_ios.png">
                            </a>

                        </div>

                    </div>

                </div>

            <hr>
            @endforeach

        </div>

    </body>

</html>
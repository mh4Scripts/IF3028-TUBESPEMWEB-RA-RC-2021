<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/detail.css">

        <title>
            SIMPLE LAPOR!
        </title>

        <style>

            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }

            .judul {
                font-style: normal;
                font-weight: normal;
                font-size: 60px;
                color: black;
                text-align: center;
                margin-bottom: 100px;
            }

            body {
                margin:50px 100px 100px 100px;
                font-size: medium;
            }

            hr {
                margin-top: 10px;
                margin-bottom: 25px;
                border: none;
                height: 1px;
                color: black;
                background-color: black;
            }

            .keterangan1 {
                width: 100%;
                display: table;
                margin-top: 35px;
            }

            .keterangan2 {
                display: table-row;
            }

            .waktu {
                display: table-cell;
                width: 440px;
            }

            .aspek {
                display: table-cell;
                width: 285px;
            }

            a {
                text-decoration: none;
                color: black;
            }

            .hapuslaporan {
                display: table-cell;
            }

            .hapuslaporan::after{
                content:'\2716';
                font-weight: bold;
            }

            .editlaporan {
                display: table-cell;
                width: 225px;
            }

        </style>
        
    </head>

    <body>

        <p class="judul ">SIMPLE LAPOR!</p>

        <p>Detail Laporan/Komentar</p>
        <hr>

        <p>
            {{ $posts->laporan }}
        </p>

        <div class="lampiran">
            Lampiran :{{ $posts->fileupload}}
        </div>

        <div class="keterangan1">

                <div class="keterangan2">

                    <div class="waktu">
                        Waktu : {{ $posts->created_at->format('d-m-Y H:i') }}
                    </div>

                    <div class="aspek">
                        Aspek : {{  $posts->aspek }}
                    </div>

                    <div class="editlaporan">
                        <a href="{{ route('edit',$posts->id) }}">
                        Edit Laporan/Komentar
                    </div>

                    <div class="hapuslaporan">
                        <a href="">
                        Hapus Laporan/Komentar
                    </div>     

             </div>

        </div>
        <hr>

    </body>

</html>
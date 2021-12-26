<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/detail_style.css">
    <title>Detail Laporan</title>
</head>

<body>
    <div class="mainBlock">
        <div class="content">
            <div class="header">
                <h1>[-Detail Laporan-]</h1>
                <h2>Liat Detail Laporan Lu Disini Yaa..</h2>
            </div>
            <br>
            Detail Laporan/Komentar
            <hr><br>
            <b>Pengirim: </b>{{$data['pengirim']}}<br>
            <b>Penerima: </b>{{$data['penerima']}}<br>
            {{$data['pesan']}}
            Lampiran: {{$data['lampiran']}}
            <br>
            Waktu: {{$data['waktu']}}
            <br>
            Aspek: {{$data['aspek']}}
            <br>
            <a href="#">Hapus Laporan/Komentar</a>
        </div>
    </div>
</body>

</html>
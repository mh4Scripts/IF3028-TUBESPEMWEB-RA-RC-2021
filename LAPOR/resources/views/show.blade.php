<!DOCTYPE html>
<html>

<head>
    <title>SIMPLE LAPOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css"/>
</head>

<body>
    <h1>SIMPLE LAPOR !</h1>

    <div class="container">
        <div class="row content-footer">
            <div class="col text-left">Detail Laporan/Komentar</div>
        </div>


        <div class="content">
            <div class="detail-content">
                {!! nl2br(e($post->body)) !!}
            </div>

            <div class="row content-footer">
                <div class="col text-left">
                    <span>Waktu: {{ $post->created_at }}</span>
                    <span>Aspek: {{ $post->lable }}</span>
                </div>
                <div class="col text-right">
                    <span>Hapus Laporan/Komentar <i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
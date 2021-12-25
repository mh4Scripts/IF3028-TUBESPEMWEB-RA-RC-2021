<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/detail.css">

    <title>Detail Page</title>
</head>
<body>
<div class="container">
    <h2>SIMPLE LAPOR!</h2>


    <div class="list">

        <div class="header">
            <p>Detail Laporan {{ $posts->id }} </p>
            <a href="/">Kembali ke homepage</a>
        </div>
        <hr>
        <div class="list-item">
            @yield("list-content")
        </div>
    </div>
</div>
</body>
</html>

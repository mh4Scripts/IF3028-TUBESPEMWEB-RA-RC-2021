<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="show-section">
        {{-- LEVEL 0 --}}
          <div class="show-data-container">
              
              {{-- LEVEL 1 --}}
              <div class="show-data-header">
                  <h2>SEMUA LAPORAN</h2>
              </div>
              <h4 class="XYZ">Tampilkan laporan berdasarkan aspek : </h4>
              <div class="show-data-sub-header">
                  <div class="data-filter active-filter"><h4>Semua</h4></div>
                  {{-- <div class="data-filter" onclick="loadData()"><h4>Mahasiswa</h4></div> --}}
                  <div class="data-filter"><h4>Dosen</h4></div>
                  <div class="data-filter"><h4>Mata Kuliah</h4></div>
                  <div class="data-filter"><h4>Program Studi</h4></div>
              </div>
              
          </div>
    </section>
    
    {{-- <script src="js/script.js"></script> --}}
</body>
</html>
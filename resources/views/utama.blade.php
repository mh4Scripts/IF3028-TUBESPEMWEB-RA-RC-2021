@extends ('layout/main')
@section ('container')
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>
                <div class="search-cont">
                    <input type="text" name="search" class="search">
                    <button type="submit" class="search-btn">Cari</button>
                </div>
            </header>
            <div class="add">
                <a href="/buat">Buat Laporan/Komentar &nbsp;</a>
            </div>
            <br>
            <div class="laporan">
                Laporan/komentar terakhir<br>
                <hr>
                @foreach ($data as $item)
                <p>{{$item->pesan}}</p>
                <div class="lampiran">
                    lampiran: {{ $item -> file }} 
                </div>
                <div class="selengkapnya">
                    <a href="/detail">Lihat Selengkapnya &nbsp;</a>
                </div>
                <div class="waktu-utm">
                    Waktu: {{ $item->create_at->format('d-m-Y H:i:s') }}
                </div>
                
                <br><br><hr><br>
                
            </div>
        </div>
@endsection 
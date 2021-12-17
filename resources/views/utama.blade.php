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
                <p>I inadvertently went to See's Candy last week (I was in the mall looking for phone repair), and as it turns out, See's Candy now charges a dollar -- a full dollar -- for even the simplest of their wee confection offerings. I bought two chocolate lollipops and two chocolate-caramel-almond things. The total cost was four-something. I mean, the candies were tasty and all, but let's be real: A Snickers bar is fifty cents. After this dollar-per-candy revelation, I may not find myself wandering dreamily back into a See's Candy any time soon.</p>
                <div class="lampiran">
                    lampiran: gambar.jpg
                </div>
                <div class="selengkapnya">
                    <a href="/detail">Lihat Selengkapnya &nbsp;</a>
                </div>
                <div class="waktu-utm">
                    Waktu: 04-01-2021
                </div>
                
                <br><br><hr><br>
                
            </div>
        </div>
@endsection
@extends('master.master')

@section('profile')
    <div class="userAuth">
        <a class="userLog" id="clickLogin" onclick="showLoginModal()"><h3>Masuk</h3></a>
        <a href="{{ route('register') }}" class="userReg"><h3>Daftar</h3></a>
    </div>
@endsection

@section('content')
    {{-- SEARCH BAR --}}
    <section class="search-bar">
        <form class="search-input" action="" method="post">
            <input  class="input-text" type="text" name="SearchKeyword" id="SearchKeyword" placeholder="Cari laporan ...">
            <button class="submit-btn" type="submit" name="SearchButton">
                <img src="media/icons/magnifying_glass.png" alt="">
            </button>
        </form>
    </section>

    {{-- CREATE BUTTON --}}
    <section class="create-new">
        <a href="" class="create-new-btn">
            <h3>Buat Laporan</h3>
            <img src="media/icons/plus.png" alt="">
        </a>
    </section>

    {{-- SHOW DATA --}}
    <section class="show-section">
        
        {{-- LEVEL 0 --}}
        <div class="show-data-container">
            <img class="show-data-container-bg" src="media/icons/silolo.png" alt="">
            {{-- LEVEL 1 --}}
            <div class="show-data-header">
                <h2>LAPORAN TERBARU</h2>
            </div>
            {{-- LEVEL 1 --}}
            <div class="show-data-content">
                {{-- LEVEL 2 --}}
                <div class="data-container">
                    {{-- LEVEL 3 --}}
                    <div class="data-header">
                        <h3 class="data-title" >Polusi Asap (Dugaan Dari Pabrik Kertas Terdekat) Hampir Setiap Hari</h3>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-content">
                        <p>Polusi asap yang saat ini hampir meliputi setiap waktu pagi siang sore dan malam daerah sekitar the orchard, summarecon bekasi, harapan baru. sekitar akhir tahun 2020 pol.... <span><a href="" class="data-detail">Baca Lebih Lanjut</a></span></p>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-footer">
                        <h4 class="data-attachment">Lihat lampiran</h4>
                        <h5 class="data-aspect"><span class="createinfo">Aspek Laporan :</span> Dosen</h5>
                        <h5 class="data-create-time"><span class="createinfo">Dibuat pada :</span> 12 Desember 2021</h5>
                        <h5 class="data-creator"><span class="createinfo">Oleh :</span> Markus Togi</h5>
                    </div>
                </div>
                {{-- LEVEL 2 --}}
                <div class="data-container">
                    {{-- LEVEL 3 --}}
                    <div class="data-header">
                        <h3 class="data-title">Banjir di Perumahan Star Perdana Residance Cikarang</h3>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-content">
                        <p>Perumahan subsidi di cikarang, selalu banjir jika ujan datang, Genangan air bisa mencapai 20-30cm bahkan lebih. sudah banyak warga yang jatuh akibat genangan yang tidak s.... <span><a href="" class="data-detail">Baca Lebih Lanjut</a></span></p>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-footer">
                        <h4 class="data-attachment">Lihat lampiran</h4>
                        <h5 class="data-aspect"><span class="createinfo">Aspek Laporan :</span> Mata Kuliah</h5>
                        <h5 class="data-create-time"><span class="createinfo">Dibuat pada :</span> 12 Desember 2021</h5>
                        <h5 class="data-creator"><span class="createinfo">Oleh :</span> Togi Fedrian</h5>
                    </div>
                </div>
                {{-- LEVEL 2 --}}
                <div class="data-container">
                    {{-- LEVEL 3 --}}
                    <div class="data-header">
                        <h3 class="data-title">Kebijakan Amburadul Manager Pln Up3 Pematangsiantar Buang Anggaran Investasi Negara</h3>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-content">
                        <p>Manager plnt up3 kota ini pematangsiantar di provinsi sumatera utara saudara joy mart sihaloho melalui kebijakannya membangun jaringan listrik tegangan menegah 20 kv sep.... <span><a href="" class="data-detail">Baca Lebih Lanjut</a></span></p>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-footer">
                        <h4 class="data-attachment">Lihat lampiran</h4>
                        <h5 class="data-aspect"><span class="createinfo">Aspek Laporan :</span> Mahasiswa</h5>
                        <h5 class="data-create-time"><span class="createinfo">Dibuat pada :</span> 12 Desember 2021</h5>
                        <h5 class="data-creator"><span class="createinfo">Oleh :</span> Fedrian Rivaldi</h5>
                    </div>
                </div>
                {{-- LEVEL 2 --}}
                <div class="data-container">
                    {{-- LEVEL 3 --}}
                    <div class="data-header">
                        <h3 class="data-title">Penimbunan/penampungan Bbm Subsidin Oleh Pelaku Atau Oknum</h3>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-content">
                        <p>Di kota manado sering sekali terjadi penimbunan/penampungan oleh pelaku/oknum spbu bekerja sama dengan pelaku lain yang bertindak sebagai konsumen. karena ada jenis mobil.... <span><a href="" class="data-detail">Baca Lebih Lanjut</a></span></p>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-footer">
                        <h4 class="data-attachment" id="dataAtt"  onclick="showAttModal()">Lihat lampiran</h4>
                        <h5 class="data-aspect"><span class="createinfo">Aspek Laporan :</span> Program Studi</h5>
                        <h5 class="data-create-time"><span class="createinfo">Dibuat pada :</span> 12 Desember 2021</h5>
                        <h5 class="data-creator"><span class="createinfo">Oleh :</span> Rivaldi Sinaga</h5>
                    </div>
                </div>
            </div>
            {{-- LEVEL 1 --}}
            <div class="show-data-footer">
                <a href=""><h3>Lihat semua laporan</h3></a>
            </div>
        </div>
    </section>

    {{-- INFORMATIONS --}}
    <section class="information-section">
        <div class="info-top-container">
            <div class="counter-card">
                <h2>SEMUA LAPORAN<br><span class="counts">120</span></h2>
            </div>
        </div>
        <div class="info-bottom-container">
            <div class="info-bottom-header">
                <h2>LAPORAN BERDASARKAN ASPEK</h2>
            </div>
            <div class="info-bottom-content">
                <div class="counter-card">
                    <h3>Mahasiswa<br><span class="counts">12</span></h3>
                </div>
                <div class="counter-card">
                    <h3>Dosen<br><span class="counts">24</span></h3>
                </div>
                <div class="counter-card">
                    <h3>Mata Kuliah<br><span class="counts">36</span></h3>
                </div>
                <div class="counter-card">
                    <h3>Program Studi<br><span class="counts">48</span></h3>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additional-element')
    {{-- SHOW ATTACHMENT MODAL --}}
    <div class="AttModalBG" id="AttModal">
        <div class="AttModalContainer">
            <div class="AttModalHeader">
                <span class="closeAttModal" onclick="closeAttModal()">&times;</span>
                <h4>Lampiran terkait</h4>
            </div>
            <div class="AttModalContent">
                <div class="imagesContainer fade">
                    <div class="imageNumber">1 / 3</div>
                    <img src="media/images/3.png" alt="">
                </div>
                <div class="imagesContainer fade">
                    <div class="imageNumber">2 / 3</div>
                    <img src="media/images/4.png" alt="">
                </div>
                <div class="imagesContainer fade">
                    <div class="imageNumber">3 / 3</div>
                    <img src="media/images/5.png" alt="">
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="imageDot-container">
            <span class="imageDot" onclick="currentSlide(1)"></span> 
            <span class="imageDot" onclick="currentSlide(2)"></span> 
            <span class="imageDot" onclick="currentSlide(3)"></span> 
        </div>
    </div>
@endsection
@extends('master.master')

@section('profile')
    <div class="userAuth">
        <a class="userLog" id="clickLogin" onclick="showLoginModal()"><h3>Masuk</h3></a>
        <a href="{{ route('register') }}" class="userReg"><h3>Daftar</h3></a>
    </div>
@endsection

@section('content')
    <div class="show-report-detail">
        <div class="detail-header">
            <div class="report-title">
                <h2>Sudah 9 Bulan Jaringan Internet Tidak Dipasang</h2>
            </div>
            <div class="report-creator-info">
                <div class="reporter-profile-picture">
                    <img src="media/images/Pasfoto_Togi.jpg" alt="">
                </div>
                <div class="reporter-profile-name">
                    <h5>Markus Togi Fedrian Rivaldi Sinaga</h5>
                </div>
            </div>
        </div>
        <div class="detail-body">
            <div class="report-content">
                {{-- {!! nl2br(e($lapor->content)) !!} --}}
                <p id="ReportContent">
                    Saya tinggal di cluster grand victoria, kelurahan mulyaharja, kec. bogor selatan, kota bogor kebetulan berbatasan dengan desa sukamantri, kec. tamansari, kabupaten bogor.
                    <br><br>
                    saat ini di cluster kami belum tersedia jaringan internet. sudah 9 bulan pemasangan jaringan bawah tanah tidak ada progres. alasan teknisi indihome tidak mendapat izin dari rw di cluster harmony, desa sukamantri, kec. tamansari, kab. bogor, tidak mengizinkan pemasangan jaringan bawah tanah.
                    <br><br>
                    saat ini di kawasan perumahan kami, hanya cluster kami yang belum terpasang jaringan internet. cluster lain dekat cluster grand victoria sudah terpasang jaringan internet. bahkan perumahan warga di samping cluster kami juga sudah terpasang internet.
                    <br><br>
                    di masa sekarang ini pekerjaan sangat memerlukan internet, sehingga kami yang tinggal di cluster grand victoria kesulitan untuk menjalankan pekerjaan kami. sinyal gsm (operator manapun) juga hampir tidak ada di cluster kami, sehingga sekedar untuk mengakses sinyal gsm harus keluar rumah dan jalan keluar cluster, itu pun hanya mendapatkan sinyal yang sangat lemah.
                    <br><br>
                    mohon masalah ini mendapat perhatian dari stakeholder terkait agar ditemukan solusi bagi kami. atas perhatian dan kerjasamanya, saya ucapkan terima kasih.
                </p>
            </div>
            <div class="report-attachment">
                <div class="report-attachment-head">
                    <h4>Lampiran</h4>
                </div>
                <div class="report-attachment-content">
                    {{-- <h4>Tidak ada lampiran</h4> --}}
                    <img src="media/images/3.png" alt="" onclick="currentSlide(1)">
                    <img src="media/images/4.png" alt="" onclick="currentSlide(2)">
                    <img src="media/images/5.png" alt="" onclick="currentSlide(3)">
                </div>
            </div>
        </div>
        <div class="detail-footer">
            <div class="report-info">
                <div class="perfeksionis">
                    <div class="adalah"><h4>Dibuat pada </h4><h4>:</h4></div>
                    <div class="jalan-ninjaKu"><h4>12 Desember 2021</h4></div>
                </div>
                <div class="perfeksionis">
                    <div class="adalah"><h4>Aspek laporan </h4><h4>:</h4></div>
                    <div class="jalan-ninjaKu"><h4>Mahasiswa</h4></div>
                </div>
            </div>
            <div class="report-action">
                <a href="{{ route('update') }}" target="_blank" class="editBtn"><h4>UBAH</h4></a>
                <a href="" target="_blank" class="deleteBtn"><h4>HAPUS</h4></a>
            </div>
        </div>
    </div>
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
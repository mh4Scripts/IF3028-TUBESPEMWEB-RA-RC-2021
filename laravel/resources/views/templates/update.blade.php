@extends('master.master')

@section('profile')
    <div class="userAuth">
        <a class="userLog" id="clickLogin" onclick="showLoginModal()"><h3>Masuk</h3></a>
        <a href="{{ route('register') }}" class="userReg"><h3>Daftar</h3></a>
    </div>
@endsection


@section('content')
    <div class="create-report">
        <div class="form-card-header">
            <h1>Laporan Baru</h1>
        </div>
        <div class="form-card-desc">
        </div>
        <div class="form-card-content">
            <form action="" class="input-form" method="post">
                <div class="row">
                    <div class="radio-selections-container">
                        <div class="radio-selections">
                            <input type="radio" name="selector" id="UseName" checked>
                            <label for="UseName"> GUNAKAN NAMA SAYA
                                <div class="select-area"></div>
                                <div class="selected">&#9745;</div>
                            </label>
                        </div>
                        <div class="radio-selections">
                            <input type="radio" name="selector" id="Anonym">
                            <label for="Anonym"> LAPOR SEBAGAI ANONIM
                                <div class="select-area"></div>
                                <div class="selected">&#9745;</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input  class="input-text" type="text" name="title" id="title" value="Sudah 9 Bulan Jaringan Internet Tidak Dipasang" autocomplete="off">
                </div>
                <div class="row pos-relative">
                    <textarea class="input-text-area" name="content" id="content"></textarea>
                    <span class="textarea" role="textbox" id="Report_Content" onfocusout="inputReportContent()" contenteditable>
                        Saya tinggal di cluster grand victoria, kelurahan mulyaharja, kec. bogor selatan, kota bogor kebetulan berbatasan dengan desa sukamantri, kec. tamansari, kabupaten bogor.
                        <br><br>
                        saat ini di cluster kami belum tersedia jaringan internet. sudah 9 bulan pemasangan jaringan bawah tanah tidak ada progres. alasan teknisi indihome tidak mendapat izin dari rw di cluster harmony, desa sukamantri, kec. tamansari, kab. bogor, tidak mengizinkan pemasangan jaringan bawah tanah.
                        <br><br>
                        saat ini di kawasan perumahan kami, hanya cluster kami yang belum terpasang jaringan internet. cluster lain dekat cluster grand victoria sudah terpasang jaringan internet. bahkan perumahan warga di samping cluster kami juga sudah terpasang internet.
                        <br><br>
                        di masa sekarang ini pekerjaan sangat memerlukan internet, sehingga kami yang tinggal di cluster grand victoria kesulitan untuk menjalankan pekerjaan kami. sinyal gsm (operator manapun) juga hampir tidak ada di cluster kami, sehingga sekedar untuk mengakses sinyal gsm harus keluar rumah dan jalan keluar cluster, itu pun hanya mendapatkan sinyal yang sangat lemah.
                        <br><br>
                        mohon masalah ini mendapat perhatian dari stakeholder terkait agar ditemukan solusi bagi kami. atas perhatian dan kerjasamanya, saya ucapkan terima kasih.
                    </span>
                </div>
                <div class="row">
                    <select class="input-select-option" name="aspect" id="aspect">
                        <option value="Mahasiswa">Aspek Laporan : Mahasiswa</option>
                        <option value="Dosen">Aspek Laporan : Dosen</option>
                        <option value="Mata Kuliah" selected>Aspek Laporan : Mata Kuliah</option>
                        <option value="Program Studi">Aspek Laporan : Program Studi</option>
                    </select>
                </div>
                <div class="input-file-container" id="Input_File_Container">
                    <input class="inputFile" type="file" name="attach" id="attach" multiple>
                    <label class="input-file" for="attach">UNGGAH LAMPIRAN</label>                                    
                    <div class="files-Preview-Area" id="files_Area"></div>
                </div>
                <div class="row">
                    <div class="upload-attachments">
                        <img src="media/icons/paper-clip.png" alt="">
                        <h5>Jumlah Lampiran</h5>
                        <div class="attachments-counter" id="attachments_counter">0</div>
                    </div>
                    <button class="submit-btn update-btn" type="submit" name="update">
                        UBAH LAPORAN
                    </button>
                </div>
            </form>
        </div>        
    </div>
@endsection
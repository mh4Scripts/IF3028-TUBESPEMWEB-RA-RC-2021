@extends('master.master')

<div class="create-report about-container">
    <div class="form-card-header">
        <h1>AKSI GAGAL!</h1>
    </div>
    <div class="form-card-desc about-desc">
        <h4><span class="highlight">Akses Dilarang.</span><br>Sesi aksi anda telah kedaluwarsa, silakan kembali dan masukkan ulang kode akses anda.<br></h4>
    </div>
    <div class="crew-title"><h2>Kenali Tim Pengembang</h2></div>
    <div class="form-card-content about-content">
        <div class="show-crew-btn" id="show_crew_btn" onclick="ShowCrew()"><img src="{{ asset('media/icons/down-arrow.jpg') }}" alt=""></div>
        <div class="hide-crew-btn" id="hide_crew_btn" onclick="HideCrew()"><img src="{{ asset('media/icons/up-arrow.jpg') }}" alt=""></div>
        <div class="show-crew-area">
            <div class="all-crew" id="show_crew">
                <div class="crew-card">
                    <img class="crew-photo" src="{{ asset('media/profile_pictures/Pasfoto_Gusti.jpg') }}">
                    <div class="crew-info">
                        <h5>Gusti Hafizah Nurrahmah</h5>
                        <h4>119140086</h4>
                    </div>
                </div>
                <div class="crew-card">
                    <img class="crew-photo" src="{{ asset('media/profile_pictures/Pasfoto_Togi.jpg') }}">
                    <div class="crew-info">
                        <h5>Markus Togi Fedrian Rivaldi Sinaga</h5>
                        <h4>118140037</h4>
                    </div>
                </div>
                <div class="crew-card">
                    <img class="crew-photo" src="{{ asset('media/profile_pictures/Pasfoto_Farhan.jpg') }}">
                    <div class="crew-info">
                        <h5>Muhammad Farhan Andani</h5>
                        <h4>119140109</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
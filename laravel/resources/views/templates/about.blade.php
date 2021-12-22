@extends('master.master')


@section('profile')
    <div class="userAuth">
        <a class="userLog" id="clickLogin" onclick="showLoginModal()"><h3>Masuk</h3></a>
        <a href="{{ route('register') }}" class="userReg"><h3>Daftar</h3></a>
    </div>
@endsection

@section('additional-BG')
    {{-- BACKGROUND --}}
    <img src="media/images/top-background.jpg" alt="home-cover" class="top-background" id="RED_BG"> 
    <img src="media/images/bottom-background.svg" alt="home-cover" class="bottom-background">
@endsection

@section('content')
    {{-- WEB HERO --}}
    <div class="web-hero">
        <h2>Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA</h2><br>
        <h3>Bersama ciptakan lingkungan ITERA yang berintegritas</h3>
    </div>

    <div class="create-report about-container">
        <div class="form-card-header">
            <h1>Tentang LAPOR!!</h1>
        </div>
        <div class="form-card-desc about-desc">
            <h4><span class="highlight">Lapor!!</span> dibangun untuk memenuhi tugas besar mata kuliah Pemrograman Web tahun 2021. Lapor!! menyediakan layanan bagi sivitas akademika ITERA agar dapat menyampaikan keresahan atau mengadukan segala bentuk penyimpangan yang terjadi dalam lingkungan akademis <br> <span class="highlight">Institut Teknologi Sumatera</span>.</h4>
        </div>
        <div class="crew-title"><h2>Tim Pengembang</h2></div>
        <div class="form-card-content about-content">
            <div class="show-crew-btn" id="show_crew_btn" onclick="ShowCrew()"><img src="media/icons/down-arrow.jpg" alt=""></div>
            <div class="hide-crew-btn" id="hide_crew_btn" onclick="HideCrew()"><img src="media/icons/up-arrow.jpg" alt=""></div>
            <div class="show-crew-area">
                <div class="all-crew" id="show_crew">
                    <div class="crew-card">
                        <img class="crew-photo" src="media/images/Pasfoto_Togi.jpg">
                        <div class="crew-info">
                            <h5>Markus Togi Fedrian Rivaldi Sinaga</h5>
                            <h4>118140037</h4>
                        </div>
                    </div>
                    <div class="crew-card">
                        <img class="crew-photo" src="media/images/Pasfoto_Togi.jpg">
                        <div class="crew-info">
                            <h5>Markus Togi Fedrian Rivaldi Sinaga</h5>
                            <h4>118140037</h4>
                        </div>
                    </div>
                    <div class="crew-card">
                        <img class="crew-photo" src="media/images/Pasfoto_Togi.jpg">
                        <div class="crew-info">
                            <h5>Markus Togi Fedrian Rivaldi Sinaga</h5>
                            <h4>118140037</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
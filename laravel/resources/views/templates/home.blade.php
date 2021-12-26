@extends('master.master')

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
        <a href="{{ route('create') }}" class="create-new-btn">
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
                
                @foreach ($reports as $report)

                    {{-- LEVEL 2 --}}
                    <div class="data-container">
                        {{-- LEVEL 3 --}}
                        <div class="data-header">
                            <a href="{{ route ('detail', $report->slugy ) }}" class="data-title">
                                <h3>{{ $report->title }}</h3>
                            </a>
                        </div>
                        {{-- LEVEL 3 --}}
                        <div class="data-content">
                            {{-- {!! nl2br(e()) !!} --}}
                            <p>{{ $report->exmpl }}.... 
                                <span>
                                    <a href="{{ route ('detail', $report->slugy ) }}" class="data-detail">
                                        Baca Lebih Lanjut
                                    </a>
                                </span>
                            </p>
                        </div>
                        {{-- LEVEL 3 --}}
                        <div class="data-footer">
                            <div class="left-data-footer">
                                @if (($report->attachment->count()) <= 0)
                                    <h4 class="no-data-attachment">
                                        Tidak Ada Lampiran
                                    </h4>
                                @else
                                    <h4 class="data-attachment" onclick="Send_Att_Data({{ $report->attachment }})">
                                        Lihat lampiran 
                                    </h4>
                                @endif
                            </div>
                            <div class="right-data-footer">
                                <h5 class="data-aspect">
                                    <span class="createinfo">
                                        Aspek Laporan :
                                    </span> 
                                    {{ $report->aspct }}
                                </h5>
                                <h5 class="data-create-time">
                                    <span class="createinfo">
                                        Dibuat pada :
                                    </span>
                                    {{ $report->created_at->diffForHumans() }}
                                </h5>
                                <h5 class="data-creator">
                                    <span class="createinfo">
                                        Oleh :
                                    </span>
                                    {{ $report->user->name }}
                                </h5>
                            </div> 
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- LEVEL 1 --}}
            <div class="show-data-footer">
                <a href="{{ route('show') }}"><h3>Lihat semua laporan</h3></a>
            </div>
        </div>
    </section>

    {{-- INFORMATIONS --}}
    <section class="information-section">
        <div class="info-top-container">
            <div class="counter-card">
                <h2>SEMUA LAPORAN<br><span class="counts">{{ $all_report->count() }}</span></h2>
            </div>
        </div>
        <div class="info-bottom-container">
            <div class="info-bottom-header">
                <h2>LAPORAN BERDASARKAN ASPEK</h2>
            </div>
            <div class="info-bottom-content">
                <div class="counter-card">
                    <h3>Mahasiswa
                        <br>
                        <span class="counts">
                            {{ $mhs_report->count() }}
                        </span>
                    </h3>
                </div>
                <div class="counter-card">
                    <h3>
                        Dosen
                        <br>
                        <span class="counts">
                            {{ $dsn_report->count() }}
                        </span>
                    </h3>
                </div>
                <div class="counter-card">
                    <h3>Mata Kuliah
                        <br>
                        <span class="counts">
                            {{ $mkl_report->count() }}
                        </span>
                    </h3>
                </div>
                <div class="counter-card">
                    <h3>Program Studi
                        <br>
                        <span class="counts">
                            {{ $prd_report->count() }}
                        </span>
                    </h3>
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
            <div class="AttModalContent" id="AttModalContent">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="imageDot-container" id="imageDotContainer">
        </div>
    </div>
@endsection

@extends('master.master')

@section('profile')
    <div class="nav-header-notif">
        <div id="NotifButton">
            <img src="media/icons/white_bell.png" alt="">
        </div>
        <div id="Notifications" class="Notifications"></div>
    </div>
    <div class="nav-header-profile">
        <img class="profile-icon" src="media/images/Pasfoto_Togi.jpg" alt="">
        <div class="profile-menu">
            <a target="_blank" href=""><h4>Profil</h4></a>
            <a href="{{ route('home') }}"><h4>Logout</h4></a>
        </div>
    </div>
@endsection

@section('content')
    {{-- SEARCH BAR AND CREATE BUTTON --}}
    <section>
        <div class="search-bar">
            <form class="search-input" action="" method="post">
                <input  class="input-text" type="text" name="SearchKeyword" id="SearchKeyword" placeholder="Cari laporan ...">
                <button class="submit-btn" type="submit" name="SearchButton">
                    <img src="media/icons/magnifying_glass.png" alt="">
                </button>
            </form>
        </div>
        <div class="create-new">
            <a href="" class="create-new-btn">
                <h3>Buat Laporan</h3>
                <img src="media/icons/plus.png" alt="">
            </a>
        </div>
    </section>

    
@endsection
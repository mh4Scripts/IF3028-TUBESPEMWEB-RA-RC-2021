@extends('template.template')

@section('title')
    LAPOR
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script type="text/javascript" src="{{asset('js/text.js')}}"></script>
@endsection

@section('content')
<div id="javas">
    <div class="judul">
        <h1>SIMPLE LAPOR !</h1>
    </div>

   
    <div class="search-container">
        <form action="">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <a href="#" onclick="create()"><p>Buat Laporan/komentar</p></a>
    </div>

    @foreach ($data as $item)
    <div class="main-content">
        <div class="isi">
            <p>{{ $item->laporan }}</p>
        
                <div class="detail">
                <p> Lampiran : {{ $item->lampiran }}</p>   
                    
                <p class="date"> Waktu : {{ $item->created_at->format('d/m/Y H:i:s') }}</p> 
                <a href="/detail/{{ $item->id }}"> Lihat selengkapnya</a>
                </div>
        </div>
    <hr>
    </div>
    @endforeach

    <div class="pagination">
        {{ $data->links() }}
    </div>


</div>

@endsection

@section('js')
<script type="text/javascript" src="{{asset('js/ajax.js')}}"></script>
@endsection


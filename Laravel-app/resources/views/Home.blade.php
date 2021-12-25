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
        <h1 onclick="location.href='/'">SIMPLE LAPOR !</h1>
    </div>

   
    <div class="search-container">
        <form type="get" action="{{ url('/search') }}">
            <input type="text" placeholder="Search..." name="keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <a href="#" onclick="create()"><p>Buat Laporan/komentar</p></a>
    </div>

    @if (count($data) != 0)
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
    @else
        <div class="main-content">
            <p>Tidak ada data yang ditemukan</p>
        </div>
    @endif


</div>

@endsection

@section('js')
<script type="text/javascript" src="{{asset('js/ajax.js')}}"></script>
@endsection


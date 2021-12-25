@extends('template.template')

@section('title')
    LAPOR
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    
@endsection

@section('content')
    <div class="judul">
        <h1 onclick="location.href='/'">SIMPLE LAPOR</h1>
    </div>

<form id="form" action="/create" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main-content">
        <p>Buat Laporan/Komentar</p>
        <hr>
        <div class="txt-box">
        <textarea name="laporan" id="laporan" maxlength="300" placeholder="Start Typin..."autofocus></textarea>
        <div id="the-count">
            <span id="counter">0</span>
        </div>
        <div class="pesan"></div>
        </div>

        <div class="select-style">
            <select id="aspek" name="aspek">
            <option value="" selected disabled hidden >Pilih Aspek Pelaporan/Komentar</option>
            <option value="as1">Aspek 1</option>
            <option value="as2">Aspek 2</option>
            <option value="as3">Aspek 3</option>
            <option value="as4">Aspek 4</option>
            </select>
        </div>
        <div class="pesan"></div>
        
          <div class="pilih">
            <input type="file" id="lampiran" name="lampiran" hidden/>

            
            <label for="lampiran">Choose File</label>

           
            <span id="file-chosen">No file chosen</span>

            
            <div class="pesan"></div>

          </div>

        <div class="btn-box">
            <button type="submit" class="fill">Lapor</button>
        </div>   
    </form>
    </div>
    
@endsection

@section('js')
{{-- <script type="text/javascript" src="{{asset('js/text.js')}}"></script> --}}

 @endsection


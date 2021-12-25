@extends('template.template')

@section('title')
    EDIT LAPOR
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <script src=""></script>
@endsection

@section('content')
    <div class="judul">
        <h1 onclick="location.href='/'">SIMPLE LAPOR</h1>
    </div>
    
    <div class="main-content">
        <p>Edit Laporan/Komentar</p>
        <hr>

        <form action="/update/{{ $dataLaporan->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="txt-box">
                <textarea  name="laporan" id="laporan" maxlength="300" value="" placeholder="Start Typin"autofocus>{{ $dataLaporan->laporan }}</textarea>
                <div id="the-count">
                    <span id="counter">0</span>
                </div>
            </div>

            <div id="aspek" class="select-style">
                <select name="aspek">
                <option selected style="display:none">Pilih Aspek Pelaporan/Komentar</option>
                <option value="as1" {{ $dataLaporan->aspek == 'as1' ? 'selected' : '' }} >Aspek 1</option>
                <option value="as2" {{ $dataLaporan->aspek == 'as2' ? 'selected' : '' }} >Aspek 2</option>
                <option value="as3" {{ $dataLaporan->aspek == 'as3' ? 'selected' : '' }} >Aspek 3</option>
                <option value="as4" {{ $dataLaporan->aspek == 'as4' ? 'selected' : '' }} >Aspek 4</option>
                </select>
            </div>
        
            <div class="pilih">
              <input type="file" id="actual-btn" hidden/>


              <label for="actual-btn">Choose File</label>


              <span id="file-chosen">{{ $dataLaporan->lampiran }}</span>
            </div>

            <div class="btn-box">
                <button type="submit" class="fill">Edit</button>
            </div>

        </form>

    </div>
@endsection

@section('js')
<script type="text/javascript" src="{{asset('js/text.js')}}"></script>
 @endsection



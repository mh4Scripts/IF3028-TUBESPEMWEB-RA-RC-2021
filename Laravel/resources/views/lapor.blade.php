@extends('layouts.default')
@section('content')



<section>
    <div class="container">
        <h1 class="head">Simple Lapor!</h1>
        <a>Buat Laporan/komentar</a>
        <hr> <br>
    
        <form id="form" action="/lapor" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="pesan"></div>
            <div class="kalimat">
                <textarea id="laporan" rows="25" cols="100" placeholder="Laporan/komentar" name="laporan" ></textarea>
            </div>
    
            <select class="aspek" name="aspek" >
                <option value="" selected disabled hidden>Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen">Dosen</option>
                <option value="Staff">Staff</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Infrastruktur">Infrastruktur</option>
                <option value="Pengajaran">Pengajaran</option>
            </select>
    
            <div class="lampirann">
                <input type="file" id="lampiran" name="lampiran">
            </div>
    
            <button class="laporbtn" type="submit" class="tombol" >Buat Laporan</button>
        </form>
        <br>
        <hr>
        </div>
</section>

    <script>

    var form = document.getElementById('form')

    var error = []

    form.addEventListener('submit', function(e){
    e.preventDefault()

    var laporan = document.getElementById('laporan')
    var aspek = document.getElementsByClassName('aspek')
    var lampiran = document.getElementById('lampiran')

    if (laporan.value.length < 20 ){
        error.push("Tolong isi filed laporan harus lebih dari 20 ") 
    }

    // if (aspek.value == ""){
    //     error.push("Tolong isi filed aspek ") 
    //  }

    // if (lampiran.value = ""){
    //      error.push("Tolong isi filed lampiran ") 
    // }


    var pesan = document.getElementById('pesan')
    pesan.innerText = error

    if (laporan.value.length > 19 ){
        form.submit();
        alert("Berhasil Submit");
    }

})
</script>

@endsection
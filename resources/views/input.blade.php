@extends("layouts.input_raw")


@section("main")
    <form action="/tambah" method="post" enctype="multipart/form-data">
        @csrf
            <div class="judul">
                <input type="text" name="judul" id="judul" placeholder="Judul Laporan/Komentar">
            </div>

            <textarea name="deskripsi" id="komentar" placeholder="Ceritakan detail komentar atau laporan kamu disini!"></textarea>

            
            <div class="bottom-form">
                <div>
                    <select id="aspek" name="aspek">
                        <option selected value="">Pilih Aspek Pelaporan/Komentar</option>
                        <option value="Pengaduan">Pengaduan</option>
                        <option value="Aspirasi">Aspirasi</option>
                        <option value="Infrastructure">Infrastructure</option>
                        <option value="Kebersihan">Kebersihan</option>
                        <option value="Perkuliahan">Perkuliahan</option>
                        <option value="Permintaan Informasi">Permintaan Informasi</option>
                    </select>
                </div>
                <div>
                    <input class="file-input" type="file" name="lampiran">
                </div>
                <div>
                    <button onclick="validate();" type="submit">Buat Laporan!</button>
                </div>
            </div>
            <hr>
        </form>
    </div>
</div>

<script>
    function validate(){
        let judul = document.getElementById("judul");
        let komentar = document.getElementById("komentar");
        let aspek = document.getElementById("aspek");
        let lampiran = document.getElementById("lampiran");
        if(komentar.value.replace(/\s+/g, '').length <= 20){
            alert("Komentar terlalu pendek, minimal 20 kata!");
            event.preventDefault();
        }
        if(judul.value == "" || komentar.value == "" || aspek.value == ""){
            alert("Semua field harus diisi!");
            event.preventDefault();
        }
        if(err = 0){
            if(confirm("Pastikan seluruh data yang dimasukan benar!") == true){
                form.submit();
            }
        }
    }
</script>
@endsection

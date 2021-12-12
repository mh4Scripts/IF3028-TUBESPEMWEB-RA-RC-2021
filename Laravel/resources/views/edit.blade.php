<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../assets/itera.png">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <nav> 
        <div class="nav">
            <table>
                <tr>
                    <th>
                        <a class="logo" href="/"><img src="../assets/itera.png" alt="Logo"
                            width="50px">
                        </a>
                    </th>
                    <th class="title">
                        <h1>Lapor!</h1>
                    </th>
                </tr>
            </table>
            <div class="navbar">
                <ul class="link">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                </ul>
            </div>  
        </div>    
    </nav>
    <div class="container">
        <h1 class="head">SIMPLE LAPOR!</h1>
        <a>Edit Laporan/komentar</a>
        <hr> <br>
    
        <form id="form" action="/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="judul" type="text" placeholder="Judul" name="judul" value="{{ $data->judul }}">
            <div id="pesan"></div>
            <div class="kalimat">
                <textarea id="laporan" rows="25" cols="100" placeholder="Laporan/komentar" name="laporan" >{{ $data->laporan }}</textarea>
            </div>
    
            <select class="aspek" name="aspek" value="">
                <option value="" selected disabled hidden>Pilih Aspek Pelaporan/Komentar</option>
                <option value="Dosen" {{ $data->aspek == 'dosen' ? 'selected' : '' }}>Dosen</option>
                <option value="Staff" {{ $data->aspek == 'Staff' ? 'selected' : '' }}>Staff</option>
                <option value="Mahasiswa" {{ $data->aspek == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                <option value="Infrastruktur" {{ $data->aspek == 'Infrastruktur' ? 'selected' : '' }}>Infrastruktur</option>
                <option value="Pengajaran" {{ $data->aspek == 'Pengajaran' ? 'selected' : '' }}>Pengajaran</option>
            </select>
    
            <div class="lampirann">
                <input type="file" id="lampiran" name="lampiran">
                <input type="hidden" id="hidden_lampiran" name="hidden_lampiran" value="{{ $data->lampiran }}">
            </div>
    
            <button class="laporbtn" type="submit" class="tombol" >Edit Laporan</button>
        </form>
        <br>
        <hr>
        </div>

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

</body>
</html>
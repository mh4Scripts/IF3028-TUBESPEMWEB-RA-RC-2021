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
        <h1>SIMPLE LAPOR!</h1> <br>
        <p>Detail Laporan / Komentar</p>
        <hr>

        <div class="edit">
            <a href="{{ url('edit/'.$data->id) }}">Ubah Laporan/Komentar</a>
        </div>

        <br>
        <p><b>{{ $data->judul }}</b></p>

        <br>
        <p>{{ $data->laporan }}</p>

        <br>
        <p>Lampiran:</p>
        <img src="{{ URL::to('/') }}/lampiran/{{ $data->lampiran }}" alt="{{ $data->lampiran }}" width="400px">
        <br>

        <br>
        <div class="footer">
            <div class="keterangan">
                <p>Waktu: {{ $data->created_at }}</p> 
                <p>Aspek: {{ $data->aspek }}</p> 
                <form action="{{ url('delete/'.$data->id) }}" onclick="return confirm('beneran mau hapus?')">
                    @method('delete')
                    @csrf
                    <button type="submit">Hapus Laporan/Komentar</button>
                </form>
            </div>
        </div>
        
        <hr>
    </div>

    <script>

        // function destroy(id){
        //     if(confirm("beneran mau hapus?")){
        //         $.ajax({
        //             url:'/delete/'+id,
        //             type:'DELETE',
        //             data:{
        //                 _token : $("input[name=_token]").val()
        //             },
        //             success:function(response){
        //                  $("#id").remove();
        //             }
        //         });
        //     }
        // }
    </script>
</body>
</html>
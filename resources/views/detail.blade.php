@extends ('layout/main')
@section ('container')
        <div class="container">
            <header>
                <h1 class="title">SIMPLE LAPOR!</h1>
            </header>
            <div class="laporan">
                Detail laporan/komentar<br>
                <hr>
            </div>

            <div class="laporan">
                <br>
                    {{ $data->pesan }}
                <div class="tmpllampiran">
                    <p>
                        lampiran: {{ $data->file }}
                    </p>
                <br>
                    <img src= "{{ URL::to ('/') }}/file/{{ $data -> file  }}"> 
                    <div class="gambar">
                        <br><br><br>
                    </div>
                </div>
                <div class="aspek">
                    Aspek: {{  $data -> aspek }}
                </div>
                <div class="waktu-dtl">
                <p>
                    Waktu: {{ $data->created_at->format('d/m/Y H:i:s') }}
                </p>
                </div>
                <button class="hapus">Hapus Laporan/Komentar</button>
                <button class="edit">
                    <a>Edit Laporan</a>
                </button>
                
                
                <br><br><hr><br>
                
            </div>
        </div>
@endsection 
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
                <div class="clear">
                    <div class="judulnnama">
                    <h3>{{ $data->judul }}</h3>
                    <h4>Diposting oleh {{ $data->nama }}</h4>
                    </div>
                </div>
                
                <br>
                    {{ $data->pesan }}
                <div class="tmpllampiran">
                    <p>
                        lampiran: {{ $data->file }}
                    </p>
                <br>
                    <img src= "{{ URL::to ('/') }}/file/{{ $data -> file  }}"> 
                    <div class="gambar">
                        <br>
                    </div>
                </div>
                <div class="clear">
                    <div class="aspek">
                        Aspek: {{  $data -> aspek }}
                    </div>
                    <div class="waktu-dtl">
                        <p>Waktu: {{ $data->created_at->format('d/m/Y H:i') }}</p>
                    </div>

                    <a class="hapus" onclick="konfirmasi('{{ $data -> id }}')">Hapus Laporan/Komentar</a>
                    <a class="edit" href="/ubah/{{ $data -> id }}">Edit Laporan</a>
                </div>
                <hr><br>
                
            </div>
        </div>
        
@endsection 
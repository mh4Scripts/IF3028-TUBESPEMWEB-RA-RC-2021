@extends('layouts.default')
@section('content')
<section>
    <div class="container">
        <h1 class="head">SIMPLE LAPOR!</h1>
        <br>
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
        @if ( $ext == 'docx' )
            <img src="{{ URL::to('/') }}/assets/word.png" alt="word" width="400px">
            <p>{{ $data->lampiran }}</p>

        @elseif ($ext == 'xlsx' )
            <img src="{{ URL::to('/') }}/assets/excel.jpeg" alt="excel" width="400px">
            <p>{{ $data->lampiran }}</p>

        @elseif ($ext == 'pdf' )
            <img src="{{ URL::to('/') }}/assets/pdf.png" alt="pdf" width="400px">
            <p>{{ $data->lampiran }}</p>

        @else
            <img src="{{ URL::to('/') }}/lampiran/{{ $data->lampiran }}" alt="{{ $data->lampiran }}" width="400px">
        @endif
        <br>

        <br>
        <div class="footer">
            <div class="keterangan">
                <p>Waktu: {{ $data->created_at->format('d-m-Y H:i:s') }}</p> 
                <p>Aspek: {{ $data->aspek }}</p> 
                <form action="{{ url('delete/'.$data->id) }}" onclick="return confirm('Yakin ingin menghapus Laporan/Komentar?')">
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
</section>
@endsection
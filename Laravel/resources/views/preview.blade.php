@extends('layouts.default')
@section('content')


<section>
    <div class="container">
        <h1>SIMPLE LAPOR!</h1> <br>
    <p>Detail Laporan / Komentar</p>
    <hr>
    <br>
    <input id="{{ $data->id }}" type="hidden">
    <p> {{ $data->laporan }}
    </p>
    
    <p>Lampiran:</p>
    <img src="{{ URL::to('/') }}/lampiran/{{ $data->lampiran }}" alt="{{ $data->lampiran }}" width="400px">
    <br>
    <div class="footer">
        <div class="keterangan">
            
            <p>Waktu: {{ $data->created_at }}      Aspek: {{ $data->aspek }} </p>
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

</section>       
@endsection
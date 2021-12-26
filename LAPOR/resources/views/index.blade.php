<!DOCTYPE html>
<html>

<head>
  <title>SIMPLE LAPOR</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
</head>

<body>
  <h1>SIMPLE LAPOR !</h1>
  <div class="container center">
    <form action="{{ route('index') }}" method="GET">
      <div class="search">
        <input name="keyword" type="text" class="searchTerm" placeholder="Cari disini . . .">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
          Cari
        </button>

      </div>
    </form>

    <a href="{{ route('create') }}" class="center">Buat laporan/Komentar <i class="fa fa-plus-square"></i></a>
  </div>

  <div class="container">
    <div class="row content-footer">
      <div class="col text-left">Laporan/Komentar Terakhir</div>
    </div>

    @foreach ($posts as $post)
    <div class="content">
      <div class="content-body">
        {!! nl2br(e($post->body)) !!}
      </div>
      <div class="row content-footer">
        @if($post->attachment)
        <a href="{{ $post->attachment }}">
          <div class="col text-left">Unduh Lampiran</div>
        </a>
        @endif
        <div class="col text-right">
          <span>Waktu : {{ $post->created_at }}</span>
          <span><a href="/post/{{ $post->id }}">Lihat Selengkapnya <i class="fa fa-angle-right"></i></a></span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @if(session('status'))
  <script>
    alert("{{ session('status') }}");
  </script>
  @endif
</body>


</html>
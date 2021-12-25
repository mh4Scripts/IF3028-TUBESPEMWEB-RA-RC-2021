@extends('master.master')

@section('content')
    <div class="show-report-detail">
        <div class="detail-header">
            <div class="report-title">
                <h2>{{ $report->title }}</h2>
            </div>
            <div class="report-creator-info">
                <div class="reporter-profile-picture">
                    <img src="{{ asset($report->user->prof_pic) }}" alt="">
                </div>
                <div class="reporter-profile-name">
                    <h5>{{ $report->user->name }}</h5>
                </div>
            </div>
        </div>
        <div class="detail-body">
            <div class="report-content">
                <p id="ReportContent">
                    {!! nl2br(e($report->cntnt)) !!}
                </p>
            </div>
            <div class="report-attachment">
                <div class="report-attachment-head">
                    <h4>Lampiran</h4>
                </div>
                <div class="report-attachment-content">
                    @if ($report->attachment->count() > 0)
                        @for ($i = 0; $i<$report->attachment->count(); $i++)
                            <img src="{{ asset('storage/' . $report->attachment[$i]->lcate) }}" alt="" onclick="currentSlide({{ $i+1 }})">
                        @endfor
                    @else
                        <h4>Tidak ada lampiran</h4>
                    @endif
                </div>
            </div>
        </div>
        <div class="detail-footer">
            <div class="report-info">
                <div class="perfeksionis">
                    <div class="adalah"><h4>Dibuat pada </h4><h4>:</h4></div>
                    <div class="jalan-ninjaKu"><h4>{{ $report->created_at->diffForHumans() }}</h4></div>
                </div>
                <div class="perfeksionis">
                    <div class="adalah"><h4>Aspek laporan </h4><h4>:</h4></div>
                    <div class="jalan-ninjaKu"><h4>{{ $report->aspct }}</h4></div>
                </div>
            </div>
            <div class="report-action">
                <a href="{{ route('update') }}" target="_blank" class="editBtn"><h4>UBAH</h4></a>
                <a href="" target="_blank" class="deleteBtn"><h4>HAPUS</h4></a>
                {{-- @auth
                    @if (auth()->user()->uname == $report->user->uname)
                    @else
                        <h4>Anda bukan pembuat laporan ini</h4>
                        <h1>
                            ERROR
                        </h1>
                    @endif
                @else
                    <h4>Masukkan kode</h4>
                    <h1>
                        ERROR
                    </h1>
                @endauth --}}
                    
            </div>
        </div>
    </div>
@endsection

@if ($report->attachment->count() > 0)
    @section('additional-element')
        {{-- SHOW ATTACHMENT MODAL --}}
        <div class="AttModalBG" id="AttModal">
            <div class="AttModalContainer">
                <div class="AttModalHeader">
                    <span class="closeAttModal" onclick="closeAttModal()">&times;</span>
                    <h4>Lampiran terkait</h4>
                </div>
                <div class="AttModalContent">
                    @for ($i = 0; $i < $report->attachment->count(); $i++)
                        <div class="imagesContainer fade">
                            <div class="imageNumber">{{ $i+1 }} / {{ $report->attachment->count() }}</div>
                            <img src="{{ asset('storage/' . $report->attachment[$i]->lcate) }}" alt="">
                        </div>
                    @endfor
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div class="imageDot-container">
                @for ($i = 0; $i < $report->attachment->count(); $i++)
                    <span class="imageDot" onclick="currentSlide({{ $i }})"></span>     
                @endfor
            </div>
        </div>
    @endsection
@endif


@section('main-script')
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
@endsection
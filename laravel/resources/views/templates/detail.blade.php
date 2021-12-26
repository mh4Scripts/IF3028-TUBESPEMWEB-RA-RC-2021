@extends('master.master')

@section('content')
    @if(session()->has('actionAccess'))
        <div class="AlertBG" id="Alert">
            <div class="AlertContainer">
                <h4>{{ session('actionAccess') }}</h4>
                <span class="closeAlert" onclick="closeAlert()">&times;</span>
            </div>        
        </div>
    @endif
    
    @if(session()->has('falseCode'))
        <div class="AlertBG" id="SizeAlert">
            <div class="AlertContainer Size-Warning-Alert">
                <h4>{{ session('falseCode') }}</h4>
                <span class="closeAlert" onclick="closeSizeAlert()">&times;</span>
            </div>        
        </div>
    @endif

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
            @if(session()->has('actionAccess'))
                <div class="report-action">
                    <a href="{{ route('update', $report->slugy) }}" class="editBtn"><h4>UBAH</h4></a>
                    <a class="deleteBtn" onclick="showDeleteModal()"><h4>HAPUS</h4></a>
                </div>
            @else
                @auth
                    @if (auth()->user()->uname === $report->user->uname)
                        <div class="report-action">
                            <a href="{{ route('update', $report->slugy) }}" class="editBtn"><h4>UBAH</h4></a>
                            <a class="deleteBtn" onclick="showDeleteModal()"><h4>HAPUS</h4></a>
                        </div>
                    @elseif($report->user->uname == "Anonim")
                        <div class="request-code">
                            <h5 class="action-description">Masukkan kode untuk ubah atau hapus</h5>
                            <form class="mini-form" action="{{ route('cekkode', $report->id ) }}" method="post">
                                @csrf
                                <input class="mini-form-input" type="text" name="uniqID" id="uniqID">
                                <button class="mini-form-btn" type="submit">Proses</button>
                            </form>    
                        </div>
                    @else
                        <h4>Anda Bukan Pembuat Laporan ini</h4>
                    @endif
                @else
                    <div class="request-code">
                        <h5 class="action-description">Masukkan kode untuk ubah atau hapus</h5>
                        <form class="mini-form" action="{{ route('cekkode', $report->id ) }}" method="post">
                            @csrf
                            <input class="mini-form-input" type="text" name="uniqID" id="uniqID">
                            <button class="mini-form-btn" type="submit">Proses</button>
                        </form>    
                    </div>
                @endauth
            @endif
            
                    
        </div>
    </div>
@endsection

@section('additional-element')
    <div class="DeleteModalBG" id="DeleteModal">
        <div class="DeleteModalContainer">
            <div class="DeleteModalHeader">
                <span class="closeDeleteModal" onclick="closeDeleteModal()">&times;</span>
                <h2>Konfirmasi Penghapusan</h2>
            </div>
            <div class="DeleteModalContent">
                <h3>Anda yakin akan menghapus laporan ini?</h3>
            </div>
            <div class="DeleteModalFooter">
                <a class="canceldeleteButton" onclick="closeDeleteModal()">Batal</a>
                <a class="deleteButton"  href="{{ route('delete', $report->id ) }}">Hapus</a>
            </div>
        </div>
    </div>
    @if ($report->attachment->count() > 0)
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
    @endif
@endsection


@section('main-script')
    <script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
@endsection
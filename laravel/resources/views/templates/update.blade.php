@extends('master.master')


@if(session()->has('EditAccess'))
<div class="AlertBG" id="Alert">
    <div class="AlertContainer">
        <h4>{{ session('EditAccess') }}</h4>
        <span class="closeAlert" onclick="closeAlert()">&times;</span>
    </div>        
</div>
@endif

@section('content')
    <div class="create-report">
        <div class="form-card-header">
            <h1>Ubah Laporan</h1>
        </div>
        <div class="form-card-desc">
        </div>
        <div class="form-card-content">
            <form action="{{ route('storeUpdate', $report->id) }}" class="input-form" method="post">
                @csrf
                <div class="row">
                    <input  class="input-text" type="text" name="title" id="title" value="Sudah 9 Bulan Jaringan Internet Tidak Dipasang" autocomplete="off" value="{{ $report->title }}">
                </div>
                <div class="row pos-relative">
                    <textarea class="input-text-area" name="cntnt"   id="cntnt">{{ $report->cntnt }}</textarea>
                    <span     class="textarea"        role="textbox" id="Report_Content" onfocusout="inputReportContent()" contenteditable>{{ $report->cntnt }}</span>
                    <input type="hidden" name="exmpl" id="exmpl">
                    <div  class="rt-error-message rc" id="ContentErrorMessage"></div>
                </div>
                <div class="row">
                    <select class="input-select-option" name="aspct" id="aspct">
                        <option value="Mahasiswa"     @if($report->aspct == "Mahasiswa")     selected @endif> Aspek Laporan : Mahasiswa     </option>
                        <option value="Dosen"         @if($report->aspct == "Dosen")         selected @endif> Aspek Laporan : Dosen         </option>
                        <option value="Mata Kuliah"   @if($report->aspct == "Mata Kuliah")   selected @endif> Aspek Laporan : Mata Kuliah   </option>
                        <option value="Program Studi" @if($report->aspct == "Program Studi") selected @endif> Aspek Laporan : Program Studi </option>
                    </select>
                </div>
                <div class="input-file-container" id="Input_File_Container">
                    <h1>Mohon Maaf</h1>
                    <h4>Keterbatasan waktu mencegah kami untuk mengembangkan fitur mengubah "Lampiran".</h4>
                    <h4>Sehingga saat ini pengguna hanya dapat mengubah "Judul", "Isi", dan "Aspek" laporan.</h4>
                </div>
                <div class="row">
                    <button class="submit-btn" type="submit" name="update">
                        UBAH LAPORAN
                    </button>
                </div>
            </form>
        </div>        
    </div>
@endsection

@section('additional-script')
    <script type="text/javascript" src="{{ asset('js/input_files_preview.js') }}"></script>
@endsection
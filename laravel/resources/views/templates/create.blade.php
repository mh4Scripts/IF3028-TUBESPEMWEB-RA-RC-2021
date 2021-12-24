@extends('master.master')

@section('content')
    <div class="create-report">
        <div class="form-card-header">
            <h1>Laporan Baru</h1>
        </div>
        <div class="form-card-desc">
        </div>
        <div class="form-card-content">
            <form action="" class="input-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="radio-selections-container">
                        <div class="radio-selections">
                            <input type="radio" name="report_as" id="UseName" value="{{ auth()->user()->id }}">
                            <label for="UseName"> GUNAKAN NAMA SAYA
                                <div class="select-area"></div>
                                <div class="selected">&#9745;</div>
                            </label>
                        </div>
                        <div class="radio-selections">
                            <input type="radio" name="report_as" id="Anonym" value="1">
                            <label for="Anonym"> LAPOR SEBAGAI ANONIM
                                <div class="select-area"></div>
                                <div class="selected">&#9745;</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <input  class="input-text" type="text" name="title" id="title" onfocusout="createSlug()" placeholder="Ketikkan judul laporan anda" autocomplete="off">
                    <input type="hidden" name="slug" id="slug">
                </div>
                <div class="row pos-relative">
                    <textarea class="input-text-area" name="content" id="content"></textarea>
                    <span class="textarea" role="textbox" id="Report_Content" onfocusout="inputReportContent()" contenteditable></span>
                </div>
                <div class="row">
                    <select class="input-select-option" name="aspect" id="aspect">
                        <option value="Mahasiswa">      Aspek Laporan : Mahasiswa       </option>
                        <option value="Dosen">          Aspek Laporan : Dosen           </option>
                        <option value="Mata Kuliah">    Aspek Laporan : Mata Kuliah     </option>
                        <option value="Program Studi">  Aspek Laporan : Program Studi   </option>
                    </select>
                </div>
                <div class="input-file-container" id="Input_File_Container">
                    <input class="inputFile" type="file" name="attach[]" id="attach" multiple>
                    <label class="input-file" for="attach">UNGGAH LAMPIRAN (MAX 1 MB)</label>                                    
                    <div class="files-Preview-Area" id="files_Area"></div>
                </div>
                <div class="row">
                    <div class="upload-attachments">
                        <img src="media/icons/paper-clip.png" alt="">
                        <h5>Jumlah Lampiran</h5>
                        <div class="attachments-counter" id="attachments_counter">0</div>
                    </div>
                    <button class="submit-btn report-btn" type="submit" name="report">
                        LAPOR!!
                    </button>
                </div>
            </form>
        </div>        
    </div>
@endsection

@section('additional-script')
    <script type="text/javascript" src="{{ asset('js/input_files_preview.js') }}"></script>
    <script type="text/javascript">
        function createSlug(){
            let Title = document.getElementById("title");
            let Slug  = 
            console.log(Title.value);
        }
    </script>
@endsection
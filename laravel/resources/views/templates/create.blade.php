@extends('master.master')

@section('content')
    <div class="AlertBG" id="SizeAlert">
        <div class="AlertContainer Size-Warning-Alert" style="display: none">
            <h4>File sudah melebihi batas ukuran, mohon hapus beberapa file</h4>
            <span class="closeAlert" onclick="closeSizeAlert()">&times;</span>
        </div>        
    </div>

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
                            <input type="radio" name="rprtr" id="UseName" value="{{ auth()->user()->id }}">
                            <label for="UseName"> GUNAKAN NAMA SAYA
                                <div class="select-area"></div>
                                <div class="selected">&#9745;</div>
                            </label>
                        </div>
                        <div class="radio-selections">
                            <input type="radio" name="rprtr" id="Anonym" value="1">
                            <label for="Anonym"> LAPOR SEBAGAI ANONIM
                                <div class="select-area"></div>
                                <div class="selected">&#9745;</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- onkeyup="validateTitle()" --}}
                    <input  class="input-text invalid" type="text" name="title" id="title"  onfocusout="createSlug()" placeholder="Ketikkan judul laporan anda" autocomplete="off">
                    
                    <input type="hidden" name="slugy" id="slugy">
                </div>
                <div class="row pos-relative">
                    <textarea class="input-text-area" name="cntnt"   id="cntnt"></textarea>
                    <span     class="textarea"        role="textbox" id="Report_Content" onfocusout="inputReportContent()" contenteditable></span>
                    <input type="hidden" name="exmpl" id="exmpl">
                    <div  class="rt-error-message rc" id="ContentErrorMessage"></div>
                </div>
                <div class="row">
                    <select class="input-select-option" name="aspct" id="aspct">
                        <option value="Mahasiswa">      Aspek Laporan : Mahasiswa       </option>
                        <option value="Dosen">          Aspek Laporan : Dosen           </option>
                        <option value="Mata Kuliah">    Aspek Laporan : Mata Kuliah     </option>
                        <option value="Program Studi">  Aspek Laporan : Program Studi   </option>
                    </select>
                </div>
                <div class="input-file-container" id="Input_File_Container">
                    <input class="inputFile" type="file" name="attachments[]" id="attach" multiple>
                    <label class="input-file" for="attach">UNGGAH LAMPIRAN (MAX 2 MB) <span><h5>Coba Pilih Satu File Beberapa Kali</h5></span> </label>                                    
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
            let Title           = document.getElementById("title");
            let Slug            = document.getElementById("slugy");
            let SlugCandidate   = Title.value.toLowerCase().replace(/\W+/g, '-');
            
            let suffix      = '';
            let characters  = 'abcdefghijklmnopqrstuvwxyz0123456789';
            for (let i=0; i<24; i++) {
                suffix += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            Slug.value = SlugCandidate + '-' + suffix;
        }
    </script>
@endsection
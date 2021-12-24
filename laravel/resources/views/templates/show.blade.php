@extends('master.master')

@section('profile')
    <a class="userLog" id="clickLogin" onclick="showLoginModal()"><h3>Masuk</h3></a>
    <a href="{{ route('register') }}" class="userReg"><h3>Daftar</h3></a>
@endsection

@section('content')
    <section class="show-section">
            
        {{-- LEVEL 0 --}}
        <div class="show-data-container">
            
            {{-- LEVEL 1 --}}
            <div class="show-data-header">
                <h2>SEMUA LAPORAN </h2>
                {{-- @if(session()->has('judulData')) {{ $judulData }} @endif --}}
            </div>
            <h4 class="XYZ">Tampilkan laporan berdasarkan aspek : </h4>
            <div class="show-data-sub-header">
                <button value=""              class="data-filter active-filter" onclick="getReportByAspect('')"             ><h4>Semua</h4></button>
                <button value="dosen"         class="data-filter"               onclick="getReportByAspect('dosen')"        ><h4>Dosen</h4></button>
                <button value="mahasiswa"     class="data-filter"               onclick="getReportByAspect('mahasiswa')"    ><h4>Mahasiswa</h4></button>
                <button value="mata-kuliah"   class="data-filter"               onclick="getReportByAspect('mata-kuliah')"  ><h4>Mata Kuliah</h4></button>
                <button value="program-studi" class="data-filter"               onclick="getReportByAspect('program-studi')"><h4>Program Studi</h4></button>
            </div>
            {{-- LEVEL 1 --}}
            <div class="show-data-content all-data" id="AllData">
                {{-- LEVEL 2 --}}
                @foreach ($reports as $report)
                <div class="data-container">
                    {{-- LEVEL 3 --}}
                    <div class="data-header">
                        <a href="{{ route ('detail', $report->slugy ) }}" class="data-title">
                            <h3>{{ $report->title }}</h3>
                        </a>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-content">
                        <p>{{ $report->exmpl }}.... <span><a href="{{ route ('detail', $report->slugy ) }}" class="data-detail">Baca Lebih Lanjut</a></span></p>
                    </div>
                    {{-- LEVEL 3 --}}
                    <div class="data-footer">
                        <div class="left-data-footer">
                            @if (($report->attachment->count()) <= 0)
                                <h4 class="no-data-attachment">
                                    Tidak Ada Lampiran
                                </h4>
                            @else
                                <h4 class="data-attachment" onclick="Send_Att_Data({{ $report->attachment }})">
                                    Lihat lampiran 
                                </h4>
                            @endif
                        </div>
                        <div class="right-data-footer">
                            <h5 class="data-aspect">
                                <span class="createinfo">
                                    Aspek Laporan :
                                </span> 
                                {{ $report->aspct }}
                            </h5>
                            <h5 class="data-create-time">
                                <span class="createinfo">
                                    Dibuat pada :
                                </span>
                                {{ $report->created_at->diffForHumans() }}
                            </h5>
                            <h5 class="data-creator">
                                <span class="createinfo">
                                    Oleh :
                                </span>
                                {{ $report->user->uname }}
                            </h5>
                        </div> 
                    </div>
                </div>
                @endforeach
            </div>
            {{-- LEVEL 1 --}}
            <div class="show-data-footer">
                {{-- <a href=""><h3>Lihat semua laporan</h3></a> --}}
            </div>
        </div>
    </section>
@endsection

@section('additional-element')
    {{-- SHOW ATTACHMENT MODAL --}}
    <div class="AttModalBG" id="AttModal">
        <div class="AttModalContainer">
            <div class="AttModalHeader">
                <span class="closeAttModal" onclick="closeAttModal()">&times;</span>
                <h4>Lampiran terkait</h4>
            </div>
            <div class="AttModalContent" id="AttModalContent">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="imageDot-container" id="imageDotContainer">
        </div>
    </div>
@endsection

@section('additional-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>    
        // JavaScript Pretty Date
        // Copyright (c) 2011 John Resig (ejohn.org)
        // Licensed under the MIT and GPL licenses
        function prettyDate(time) {var date = new Date((time || "").replace(/-/g, "/").replace(/[TZ]/g, " ")),diff = (((new Date()).getTime() - date.getTime()) / 1000),day_diff = Math.floor(diff / 86400);if (isNaN(day_diff) || day_diff < 0 || day_diff >= 31) return;return day_diff == 0 && (diff < 60 && "just now" || diff < 120 && "1 minute ago" || diff < 3600 && Math.floor(diff / 60) + " minutes ago" || diff < 7200 && "1 hour ago" || diff < 86400 && Math.floor(diff / 3600) + " hours ago") || day_diff == 1 && "Yesterday" || day_diff < 7 && day_diff + " days ago" || day_diff < 31 && Math.ceil(day_diff / 7) + " weeks ago";}
        // If jQuery is included in the page, adds a jQuery plugin to handle it as well
        if (typeof jQuery != "undefined") jQuery.fn.prettyDate = function() {return this.each(function() {var date = prettyDate(this.title);if (date) jQuery(this).text(date);});};

        // JavaScript Fetch API - Untuk Menggantikan AJAX
        // Sumber tutorial    : https://www.w3schools.com/js/js_api_fetch.asp
        // Referensi tambahan : https://stackoverflow.com/questions/65014796/how-do-i-use-javascript-fetch-in-laravel-8

        async function getReportByAspect(aspectRequested){
            let Filters = document.getElementsByClassName("data-filter");
            for (let i = 0; i<5; i++){
                if (Filters[i].value != aspectRequested){
                    Filters[i].className = Filters[i].className.replace(" active-filter", " ");
                }else{
                    Filters[i].className += " active-filter";
                }
                // console.log(document.getElementsByClassName("data-filter")[i].value);
            }
            let URL = 'semua-laporan/' + aspectRequested;
            if(aspectRequested == ''){
                URL = 'semua-laporan/semua';
            }
            
            let Fetch_Result        = await fetch(URL, { method : 'get' });
            let JSON_Result         = await Fetch_Result.json();
            
            let AllDataContainer    = document.getElementById("AllData");
            AllDataContainer.innerHTML = "";

            for (let i=0; i<JSON_Result.length; i++){

                let DataContainer               = document.createElement("div");
                DataContainer.className         = "data-container";

                // HEADER DATA
                let DataHeader                  = document.createElement("div");
                DataHeader.className            = "data-header";

                let DataTitle                   = document.createElement("a");
                DataTitle.className             = "data-title";

                DataTitle.setAttribute("href", "detail-laporan/"+JSON_Result[i]['slugy']);

                let ReportTitle                 = "<h3>"+JSON_Result[i]['title']+"<h/3>";
                
                DataTitle.innerHTML             = ReportTitle;

                DataHeader.appendChild(DataTitle);

                // CONTENT DATA
                let DataContent                 = document.createElement("div");
                DataContent.className           = "data-content";
                
                let DataExample                 = document.createElement("p");                
                let ThisExample                 = JSON_Result[i]['exmpl'] + ".... <span><a href=\"detail-laporan/" + JSON_Result[i]['slugy'] + "\" class=\"data-detail\">Baca Lebih Lanjut</a></span>";
                
                DataExample.innerHTML = ThisExample;
                DataContent.appendChild(DataExample);

                // FOOTER DATA
                let DataFooter                  = document.createElement("div");
                DataFooter.className            = "data-footer";

                //KIRI
                let LeftDataFooter              = document.createElement("div");
                LeftDataFooter.className        = "left-data-footer";

                if (JSON_Result[i]['attachment'].length <= 0){
                    LeftDataFooter.innerHTML        = "<h4 class=\"no-data-attachment\">Tidak Ada Lampiran</h4>";
                }else{
                    let DataAttachment = document.createElement("h4");
                    DataAttachment.className        = "data-attachment";
                    DataAttachment.innerHTML        = "Lihat Lampiran";
                    DataAttachment.onclick          = function(){ Send_Att_Data(JSON_Result[i]['attachment']); };
                    LeftDataFooter.appendChild(DataAttachment);
                }

                //KANAN
                let RightDataFooter             = document.createElement("div");
                RightDataFooter.className       = "right-data-footer";

                let DataAspect                  = "<h5 class=\"data-aspect\"><span class=\"createinfo\">Aspek Laporan :</span>"+ JSON_Result[i]['aspct']+ "</h5>";
                let CreateTime                  = "<h5 class=\"data-create-time\"><span class=\"createinfo\">Dibuat pada :</span>"+

                // #####################################################################
                // #-------------------------------------------------------------------#
                // #-------------------------------------------------------------------#
                // #------ SATU - SATUNYA BAGIAN YANG MENGGUNAKAN LIBRARY JQUERY ------#
                // #-------------------------------------------------------------------#
                                 prettyDate(JSON_Result[i]['created_at'])+ "</h5>";
                // #-------------------------------------------------------------------#
                // #---------------- SILAKAN DICEK KALAU TIDAK PERCAYA ----------------#
                // #-------------------------------------------------------------------#
                // #####################################################################   

                let DataCreator                 = "<h5 class=\"data-creator\"><span class=\"createinfo\">Oleh :</span>"+JSON_Result[i]['user']['uname']+"</h5>";

                RightDataFooter.innerHTML       = DataAspect + CreateTime + DataCreator;

                DataFooter.appendChild(LeftDataFooter);
                DataFooter.appendChild(RightDataFooter);

                DataContainer.appendChild(DataHeader);
                DataContainer.appendChild(DataContent);
                DataContainer.appendChild(DataFooter);

                AllDataContainer.appendChild(DataContainer);
            }
        }
    </script>
@endsection
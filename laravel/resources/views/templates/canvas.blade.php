<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #000">
    <section class="show-section">
            
        {{-- LEVEL 0 --}}
        <div class="show-data-container">
            
            {{-- LEVEL 1 --}}
            <div class="show-data-header">
                <h2>SEMUA LAPORAN</h2>
            </div>
            <h4 class="XYZ">Tampilkan laporan berdasarkan aspek : </h4>
            <div class="show-data-sub-header">
                <button id="allReport" value="" class="data-filter active-filter">Semua</button>
                <button id="dsnReport" value="dosen" class="data-filter">Dosen</button>
                <button id="mhsReport" value="mahasiswa" class="data-filter">Mahasiswa</button>
                <button id="mklReport" value="Mata Kuliah" class="data-filter">Mata Kuliah</button>
                <button id="prdReport" value="Program Studi" class="data-filter">Program Studi</button>
            </div>
            {{-- LEVEL 1 --}}
            <div class="show-data-content all-data" id="AllData">
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
    
    
    {{-- <input type='text' id='search' name='search' placeholder='Enter userid 1-27'>
    <input type='button' value='Search' id='btnSearch'>
    <br/>
    <input type='button' value='Fetch all records' id='fetchAllRecord'>

    <table border='1' id='userTable' style='border-collapse: collapse;'>
        <thead>
            <tr>
                <th>S.no</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
     --}}
    <script src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript'>
        // $(document).ready(function(){
        //     // Fetch all records
        //     $('#fetchAllRecord').click(function(){
        //         fetchRecords(0);
        //     });
        //     // Search by userid
        //     $('#btnSearch').click(function(){
        //         var userid = Number($('#search').val().trim());
        //         if(userid > 0){
        //             fetchRecords(userid);
        //         }
        //     });
        // });
        $(document).ready(function(){
            $('#mhsReport').click(function(){
                // this.className+=' active-filter';
                fetchData(this.value);
                // console.log(document.getElementById("AllData").innerHTml);
                // console.log(document.getElementById("AllData").);
                $('#AllData').empty();
            });
        });

        function fetchData(ReportAspect){
            console.log(ReportAspect);
            console.log(document.getElementById("AllData").innerHTml);
            // $.ajax({
            //     url             : 'c/'+ReportAspect,
            //     type            : 'get',
            //     dataType        : 'json',
            //     success         : function(response){
            //         $('#AllData').innerHTml = "";
            //     }
            // });
        }
        // function fetchRecords(id){
        //     $.ajax({
        //         url         : 'getData/'+id,
        //         type        : 'get',
        //         dataType    : 'json',
        //         success     : function(response){
        //             var len = 0;
        //             $('#userTable tbody').empty(); // Empty <tbody>
        //             if(response['data'] != null){
        //                 len = response['data'].length;
        //             }
        //             if(len > 0){
        //                 for(var i=0; i<len; i++){
        //                     var id = response['data'][i].id;
        //                     var username = response['data'][i].username;
        //                     var name = response['data'][i].name;
        //                     var email = response['data'][i].email;
        //                     var tr_str = "<tr>" +
        //                     "<td align='center'>" + (i+1) + "</td>" +
        //                     "<td align='center'>" + username + "</td>" +
        //                     "<td align='center'>" + name + "</td>" +
        //                     "<td align='center'>" + email + "</td>" +
        //                     "</tr>";
        //                     $("#userTable tbody").append(tr_str);
        //                 }
        //             }else if(response['data'] != null){
        //                 var tr_str = "<tr>" +
        //                 "<td align='center'>1</td>" +
        //                 "<td align='center'>" + response['data'].username + "</td>" + 
        //                 "<td align='center'>" + response['data'].name + "</td>" +
        //                 "<td align='center'>" + response['data'].email + "</td>" +
        //                 "</tr>";
        //                 $("#userTable tbody").append(tr_str);
        //             }else{
        //                 var tr_str = "<tr>" +
        //                 "<td align='center' colspan='4'>No record found.</td>" +
        //                 "</tr>";
        //                 $("#userTable tbody").append(tr_str);
        //             }
        //         }
        //     });
        // }
    </script>
</body>
</html>
<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


// use Illuminate\Support\Facades\DB;
// use Illuminate\Validation\Rule;
// use Exception;
// use Carbon\Carbon;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\MailLapor;
// use Illuminate\Support\Facades\Storage;

class LaporController extends Controller
{
    public function home()
    {
        $all_report = Report::with(['user' , 'attachment'    ])->latest()->get();
        $shw_report = Report::with(['user' , 'attachment'    ])->latest()->take(10)->get();
        $mhs_report = Report::where('aspct', 'mahasiswa'     );
        $dsn_report = Report::where('aspct', 'dosen'         );
        $mkl_report = Report::where('aspct', 'mata kuliah'   );
        $prd_report = Report::where('aspct', 'program studi' );

        return view('templates.index',[
            "title"         => "LAPOR!! - Layanan Aspirasi dan Pengaduan Sivitas Akademika ITERA",
            "reports"       => $shw_report,
            "all_report"    => $all_report,
            "mhs_report"    => $mhs_report,
            "dsn_report"    => $dsn_report,
            "mkl_report"    => $mkl_report,
            "prd_report"    => $prd_report
        ]);
    }


    public function show(){
        $all_report = Report::with(['user' , 'attachment'    ])->latest()->get();
        return view('templates/show',[
            "title"         => "Semua Laporan",
            "reports"       => $all_report
        ]);
    }


    public function showAspect($aspect){
        if ($aspect == "semua"){
            $reports = Report::with(['user' , 'attachment'    ])->latest()->get();
        }else{
            //UBAH SLUG MENJADI STRING BIASA AGAR DIKENALI KETIKA MEMBANDINGKAN DENGAN ASPEK DI DATABASE
            $aspect = str_replace('-', ' ', $aspect);
            $reports = Report::with(['user', 'attachment'])->where('aspct' , $aspect)->get();
        }
        
        if ($reports != NULL){
            return Response::json($reports);
        }
    }


    public function detail($slugy)
    {
        $data = Report::firstWhere('slugy', $slugy);
        if ($data != NULL) {
            return view('templates.detail', [
                "title"         => "Detail Laporan",
                "report"        => $data
            ]);
        } else {
            return redirect()->route('home');
        }
    }
    
    public function create(){
        return view('templates.create',[
            "title"     => "Buat Laporan"
        ]);
    }

    public function store(Request $request){
        dd($request);
        // dd($request['report_as']);
    }










    public function about(){
        return view('templates/about',[
            "title"         => "Tentang LAPOR!!",
        ]);
    }

}





















//     public function getAllPosts() {  
//         $datas = Report::all();
//         foreach ($datas as $data){
//            $username = $data->user->name;
//            //do something with $username
//        }
//        return view('templates/index')->with('detailed_posts');
//        //here the $detailed_posts can be defined in the 'do something' above
//    }

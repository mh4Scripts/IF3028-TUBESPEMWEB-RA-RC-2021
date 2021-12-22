<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;


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
        $all_report = Report::all();
        $mhs_report = Report::where('aspct' , 'Mahasiswa');
        $dsn_report = Report::where('aspct', 'Dosen');
        $mkl_report = Report::where('aspct', 'Mata Kuliah');
        $prd_report = Report::where('aspct', 'Program Studi');

        return view('templates/index',[
            "reports"    => $all_report,
            "mhs_report" => $mhs_report,
            "dsn_report" => $dsn_report,
            "mkl_report" => $mkl_report,
            "prd_report" => $prd_report
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

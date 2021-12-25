<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Response;


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


    public function show()
    {
        $all_report = Report::with(['user' , 'attachment'    ])->latest()->get();
        return view('templates/show',[
            "title"         => "Semua Laporan",
            "reports"       => $all_report
        ]);
    }


    public function showAspect($aspect)
    {
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
    
    public function create()
    {
        return view('templates.create',[
            "title"     => "Buat Laporan"
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            "title"     => 'required|max:255',
            "slugy"     => 'required|unique:reports',
            "cntnt"     => 'required',
            "aspct"     => 'required'
        ]);

        $validated_data['exmpl']      = Str::limit($validated_data['cntnt'], 170, '');
        
        if($request['rprtr'] == null){
            $validated_data['rprtr']  = 1;
        }else{
            $validated_data['rprtr']  = $request['rprtr'];
        }

        $validated_data['unqid']      = Str::random(12);

        $report = Report::create($validated_data);

        if($request->hasfile('attachments'))
        {
            foreach($request->file('attachments') as $file)
            {
                $attachment['lcate'] = $file->store('public/files');
                $attachment['rp_id'] = $report->id;
                Attachment::create($attachment);
            }
            return redirect('/')->with('successReport', 'Laporan berhasil dikirim!');
        }
        else
        {
            return redirect('/')->with('successReport', 'Laporan berhasil dikirim!');
        }
    }

    public function CekKode(Request $request, $report_id)
    {
        $report = Report::firstWhere('id', $report_id);

        if ($request['uniqID'] == $report['unqid'])
        {
            // return redirect('/')->with('successReg', 'Akun ada berhasil dibuat.');
            return redirect()->route('detail', $report->slugy)->with('actionAccess', 'Silakan melakukan perubahan.');
        }

        else
        {
            return back()->with('falseCode', 'Kode yang anda masukkan salah!');
        }
    }

    public function update($slugy)
    {
        $report = Report::firstWhere('slugy', $slugy);
        return view('templates/update',[
            "title"         => "Ubah Laporan",
            "report"        => $report
        ]);
    }

    public function storeUpdate(Request $request, $id){
        $updated_data = $request->validate([
            "title"     => 'required|max:255',
            "cntnt"     => 'required',
            "aspct"     => 'required'
        ]);

        Report::where('id' , $id)->update($updated_data);

        return redirect('/')->with('successUpdate', 'Laporan berhasil diubah!');
    }

    public function delete($id){
        $report = Report::firstWhere('id', $id);
        $attachments = Attachment::where('rp_id' , $report->id)->get();
        foreach($attachments as $attachment)
        {
            Attachment::destroy($attachment->id);
        }
        Report::destroy($report->id);
        return redirect('/')->with('successDelete', 'Laporan berhasil dihapus!');
    }

    public function livesearch($keyword){
        
        $results = Report::with(['user', 'attachment'])->where('title', 'LIKE', '%'.$keyword.'%')->get();
        return Response::json($results);
        
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

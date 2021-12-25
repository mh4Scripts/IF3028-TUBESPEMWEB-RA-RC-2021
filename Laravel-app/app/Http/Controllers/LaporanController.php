<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laporan;
class LaporanController extends Controller
{

    public function create(){
        return view('create');
    }
    
    public function index(){
        //
        $data = Laporan::latest()->simplepaginate(5);
        $id_latest = Laporan::latest()->first();
        $id = $id_latest->id;

        return view('Home', compact('data','id'));
    }

    public function store(Request $request){
        $data = request()->validate([
            'laporan' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required|max:2000|mimes:jpeg,png,jpg,doc,docx,xls,xlsx,ppt,pptx,pdf',
        ]);

        $id_latest = Laporan::latest()->first();
        $id_file = $id_latest->id + 1;
        $nama_file = "lampiran".$id_file;
        
        $lampiran = $request->file('lampiran');
        $lampiran_db = $nama_file.'.'.$lampiran->getClientOriginalExtension();
        $lampiran->move(public_path('lampiran'), $lampiran_db);


        $laporan = new Laporan();
        $laporan->laporan = request('laporan');
        $laporan->aspek = request('aspek');
        $laporan->lampiran = $lampiran_db;
        $laporan->save();
        

        return redirect('/');
    }
    
    public function detail($id)
    {
        $data = Laporan::find($id);
        $getEx = $data->lampiran;
        $ext = substr($getEx, strpos($getEx, ".") + 1);
        
        return view('detail', compact('data','ext'));
    }
    
    public function edit($idLaporan){
        // $dataLaporan = DB::select('SELECT laporan,aspek,lampiran FROM laporans WHERE id={$id_laporan} ');
        $dataLaporan = Laporan::find($idLaporan);
        $getEx = $dataLaporan->lampiran;
        return view('editLaporan', compact('dataLaporan',$dataLaporan));
    }

    public function update(Request $request, $idLaporan){
        // $data = request()->validate([
        //     'laporan' => 'required',
        //     'aspek' => 'required',
        //     'lampiran' => 'required|max:2000|mimes:jpeg,png,jpg,doc,docx,xls,xlsx,ppt,pptx,pdf',
        // ]);

        $laporan = Laporan::find($idLaporan);
        $laporan->laporan = request('laporan');
        $laporan->aspek = request('aspek');
        // $laporan->lampiran = request('lampiran');
        $laporan->save();
        return redirect('/');
    }
}

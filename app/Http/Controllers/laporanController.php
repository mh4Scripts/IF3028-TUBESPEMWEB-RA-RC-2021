<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function index()
    {
        $data = laporan::all();
        return view('index', ['data'=>$data]);
    }
    
    public function buatlaporan(Request $request){
        $request->validate([
            'pengirim' => 'required',
            'penerima' => 'required',
            'pesan' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required',
        ]);
        $lampiran=$request->file('lampiran');
        $new_lampiran=rand().'.'.$lampiran->getClientOriginalExtension();
        $lampiran->move(public_path('lampiran'), $new_lampiran);
        $status=laporan::create([
            'pengirim'=>$request->pengirim,
            'penerima'=>$request->penerima,
            'pesan'=>$request->pesan,
            'aspek'=>$request->aspek,
            'lampiran'=>$request->new_lampiran,
        ]);
        if ($status) return redirect()->route('laporan',$status->id);
        else return false; 
    }

    public function detail()
    {
        $data = laporan::all();
        return view('detail', ['data'=>$data]);
    }
}

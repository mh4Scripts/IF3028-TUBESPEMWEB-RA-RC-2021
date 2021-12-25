<?php

namespace App\Http\Controllers;

use App\Models\Lapor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LaporController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Lapor::latest()->simplepaginate(5);
        $title="Home";
        $id_latest = Lapor::latest()->first();

        if($id_latest == null){
            return view('index', compact('data','title'));
        }else{
            $id = $id_latest->id;

            return view('index', compact('data','title','id'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'judul' => 'required',
            'laporan' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required|max:2000|mimes:jpeg,png,jpg,doc,docx,xls,xlsx,ppt,pptx,pdf',
        ]);

        $lampiran = $request->file('lampiran');
        $new_lampiran = rand().'.'.$lampiran->getClientOriginalExtension();

        $data_laporan = array(
            'judul' => $request->judul,
            'laporan' => $request->laporan,
            'aspek' => $request->aspek,
            'lampiran' => $new_lampiran,
        );

        $lampiran->move(public_path('lampiran'), $new_lampiran);
        $savedData = Lapor::create($data_laporan);

        return response()->json([
            'success' => 'data berhasil disimpan',
            'data' => $savedData
        ]);

        // return redirect('/')->with('success', 'data has been created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'preview';
        $data = Lapor::find($id);
        $getEx = $data->lampiran;
        $ext = substr($getEx, strpos($getEx, ".") + 1);
        
        return view('preview', compact('data','title','ext'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Lapor::find($id);
        $title = 'Edit';
        return view('edit', compact('data','title'));
    }

    /**
     * Aulia Rahman Zulfi
     * Fadhillah Azhar Alsani
     * Fahri Setiawan
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $lampiran_lama = $request->hidden_lampiran;
        $lampiran = $request->file('lampiran');
        if($lampiran != ''){
            $request->validate([
                'judul' => 'required',
                'laporan' => 'required',
                'aspek' => 'required',
                'lampiran' => 'required|max:2000|mimes:jpeg,png,jpg,doc,docx,xls,xlsx,ppt,pptx,pdf',
            ]);

            $new_lampiran = $lampiran_lama;
            $lampiran->move(public_path('lampiran'), $new_lampiran);
        }else{
            $request->validate([
                'judul' => 'required',
                'laporan' => 'required',
                'aspek' => 'required'
            ]);
            $new_lampiran = $lampiran_lama;
        }

        $data_laporan = array(
            'judul' => $request->judul,
            'laporan' => $request->laporan,
            'aspek' => $request->aspek,
            'lampiran' => $new_lampiran,
        );

        $data = Lapor::find($id);
        $data->update($data_laporan);

        return redirect('/preview/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Lapor::find($id);
        File::delete('lampiran/'.$data->lampiran);

        $data->delete($data);

        return redirect('/')->with('Success','data berhasil dihapus');
    }

    public function search()
    {

        $search_text = $_GET['search'];
        $data = Lapor::where('laporan', 'LIKE','%'.$search_text.'%')->orWhere('judul', 'LIKE','%'.$search_text.'%')->latest()->simplepaginate(5);
        $title = 'search';
        return view('search', compact('data','title','search_text'));
    }
}

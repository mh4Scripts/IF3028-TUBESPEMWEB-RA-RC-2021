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
        return view('index', compact('data','title'));
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
            'laporan' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required|max:2000|mimes:jpeg,png,jpg,doc,docx,xls,xlsx,ppt,pptx,pdf',
        ]);

        $lampiran = $request->file('lampiran');
        $new_lampiran = rand().'.'.$lampiran->getClientOriginalExtension();

        $data_laporan = array(
            'laporan' => $request->laporan,
            'aspek' => $request->aspek,
            'lampiran' => $new_lampiran,
        );

        $lampiran->move(public_path('lampiran'), $new_lampiran);
        Lapor::create($data_laporan);

        return redirect('/')->with('success', 'data has been created');
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
        return view('preview', compact('data','title'));
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $data = Lapor::where('laporan', 'LIKE','%'.$search_text.'%')->latest()->simplepaginate(5);

        return view('search', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = laporan::latest()->paginate (5);
        $title = "utama";
        return view('utama', compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('utama');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nama' => 'required',
            'judul' => 'required',
            'pesan' => 'required',
            'aspek' => 'required',
            'file' => 'required',
        ]);

        $file = $request-> file('file');
        $new_file = rand().'.'.$file->getClientOriginalExtension();

        $data_lapor = array(
            'nama' => $request-> nama,
            'judul' => $request -> judul,
            'pesan' => $request -> pesan,
            'aspek' => $request -> aspek,
            'file' => $new_file
        );
        
        // dd($data_lapor);
        $file -> move(public_path('file'),$new_file);
        laporan::create($data_lapor);
        
        return redirect('utama')-> with('sukses','data berhasil disimpan');

        
        // $data_test = 'test';
        // dd ($data_test);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail';
        $data = laporan::find($id);

        return view('detail',compact ('data','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
    }
}

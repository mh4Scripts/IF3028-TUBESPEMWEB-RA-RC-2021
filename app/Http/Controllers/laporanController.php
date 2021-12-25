<?php

namespace App\Http\Controllers;
use App\Models\laporan;
use Illuminate\Http\Request;
use File;

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
            'file' => 'required|file|max:4096'
            // 'file' => 'required|file|mimes:xls, xlsx, ppt, pptx, pdf,doc, docx, jpg,jpeg,png|max:4096'
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
        $title = 'Ubah';
        $data = laporan::find($id);

        return view('ubah',compact ('data','title'));
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
        $old_file_name = $request->hidden_file;
        $file = $request->file('file');

        if($file != '')
        {
            $request->validate([
                'nama' => 'required',
                'judul' => 'required',
                'pesan' => 'required',
                'aspek' => 'required',
                'file' => 'required',
            ]);
            $file_name = $old_file_name;
            $file->move(public_path('file'),$file_name);
        }else{
            $request->validate([
                'nama' => 'required',
                'judul' => 'required',
                'pesan' => 'required',
                'aspek' => 'required',
            ]);
            $file_name = $old_file_name;
        }
        $data_lapor = array(
            'nama' => $request-> nama,
            'judul' => $request -> judul,
            'pesan' => $request -> pesan,
            'aspek' => $request -> aspek,
            'file' => $file_name
        );
        $title = 'utama';
        $data = laporan::find($id);
        $data->update($data_lapor);

        return redirect('utama')->with('sukses','data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = laporan::find($id);
        File::delete('file/'.$data->file);

        $data->delete($data);

        return redirect('utama');
    }
}

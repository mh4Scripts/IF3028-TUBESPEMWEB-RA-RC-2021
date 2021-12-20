<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('home_page',compact('posts'));
    }

    public function create()
    {
        return view('form_page');
    }

    public function store (Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'pelapor' => 'required',
            'laporan' => 'required',
            'aspek' => 'required',
            'fileupload' => 'required'
        ]);
        $posts = Post::create([
            'judul' => $request->judul,
            'pelapor' => $request->pelapor,
            'laporan' => $request->laporan,
            'aspek' => $request->aspek,
            'fileupload' => $request->fileupload
        ]);

        if($posts){
            return redirect()
                ->route('home_page')
                ->with([
                    'success' => 'Laporan anda telah terkirim dengan sukses'
                ]);
        }
        else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi suatu masalah, silakan coba kembali'
                ]);
        }
    }
}
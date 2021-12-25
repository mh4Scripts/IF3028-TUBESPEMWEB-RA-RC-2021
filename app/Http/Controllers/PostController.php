<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('main', compact('posts'));
    }

    public function create()
    {
        return view('lapor');   
    }

    public function store(Request $request)
    {
        $this->validate($request, [
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

        if ($posts) {
            return redirect()
                ->route('main')
                ->with([
                    'success' => 'Laporan anda telah terkirim dengan sukses'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi suatu masalah, silakan coba kembali'
                ]);
        }
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('detail', compact('posts'));
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('edit',  compact('posts'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'pelapor' => 'required',
            'laporan' => 'required',
            'aspek' => 'required',
            'fileupload' => 'required'
        ]);

        $posts = Post::findOrFail($id);

        $posts->update([
            'judul' => $request->judul,
            'pelapor' => $request->pelapor,
            'laporan' => $request->laporan,
            'aspek' => $request->aspek,
            'fileupload' => $request->fileupload
        ]);

        if ($posts) {
            return redirect()
                ->route('main')
                ->with([
                    'success' => 'Laporan anda telah terkirim dengan sukses'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Terjadi suatu masalah, silakan coba kembali'
                ]);
        }
    }

    public function hapus($id)
    {
        // $id->delete();
        Post::where('id', $id)->delete();
        return redirect('')->with('success', 'Berhasil delete data');
    }

}

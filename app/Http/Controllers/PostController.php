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
        return view('home_page', compact('posts'));
    }

    public function create()
    {
        return view('form_page');
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
                ->route('home_page')
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
        return view('detail_page', compact('posts'));
    }

    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('edit_page',  compact('posts'));
    }
    public function hapus($id){
        $posts = Post::findOrFail($id)->first();
        Post::hapus('posts/'.$posts->file);
     
        // hapus data
        Post::findOrFail('id',$id)->hapus();
        
        return redirect()->back();
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
                ->route('home_page')
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

    public function search_bar()
    {
        $post = Post::Latest();

        if (request('search')) {
            $posts->where('judul', 'like', '%' . request('search') . '%');
                orWhere('pelapor', 'like', '%' . request('search') . '%');
        }

        return view('home_page', [
            "posts" => Post::latest()->get()
        ]);
    }
}

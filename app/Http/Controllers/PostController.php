<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model untuk menyimpan data laporan
use App\Models\Post;

class PostController extends Controller
{
    // Menampilkan seluruh laporan
    public function index() {
        return view('home', [
            "posts" => Post::all()
        ]);
    }
    
    public function search($search_text)
    {
        return view('home', [
            "posts" => Post::where('deskripsi', 'LIKE','%'.$search_text.'%')->orWhere('judul', 'LIKE','%'.$search_text.'%')->get()
        ]);
    }
    

    // Mencari dan menampilkan suatu laporan
    public function show($id) {
        return view('data', [
            "posts" => Post::find($id)
        ]);
    }
    
    // Membuat laporan baru
    // TODO: Simpan lampiran
    public function create(Request $request) {

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'aspek' => 'required',
            'lampiran' => 'required|max:2000|mimes:jpeg,png,jpg,doc,docx,xls,xlsx,ppt,pptx,pdf',
        ]);

        $lampiran = $request->file('lampiran');
        $new_lampiran = rand().'.'.$lampiran->getClientOriginalExtension();

        $lampiran->move(public_path('lampiran'), $new_lampiran);

        $status = Post::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'aspek' => $request->aspek,
            'lampiran' => $new_lampiran,
        ]);

        // Alihkan ke laporan bila berhasil
        dump($status->id);
        if ($status) return redirect()->route('laporan',$status->id);
        // Return false bila gagal
        else return false;
    }

    // Modifikasi laporan yang sudah ada
    // TODO: Update lampiran
    public function update(Request $request) {
        $status = Post::where('id', $request->id)->first()->update([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "aspek" => $request->aspek,
            "lampiran" => $request->lampiran
        ]);
        // Alihkan ke laporan bila berhasil
        if ($status) return redirect()->route('laporan',$status->id);
        // Return false bila gagal
        else return false;
    }

    // Menghapus laporan lama
    // TODO: Hapus lampiran
    public function delete($id) {
        $post =Post::where('id',$id)->first();
        //File::delete('lampiran/'.$data->lampiran);

        if ($post != null) {
            $post->delete();
            return redirect()->route('/')->with(['message'=> 'Berhasil Dihapus!!']);
        }
    
        return redirect()->route('/')->with(['message'=> 'ID Salah!!']);

    }

}
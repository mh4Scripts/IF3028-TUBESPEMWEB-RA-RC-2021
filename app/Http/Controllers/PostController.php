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

    // Mencari dan menampilkan suatu laporan
    public function show($id) {
        return view('data', [
            "posts" => Post::find($id)
        ]);
    }

    // Membuat laporan baru
    // TODO: Simpan lampiran
    public function create(Request $request) {
        $status = Post::create([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "aspek" => $request->aspek,
            "lampiran" => $request->lampiran
        ]);
        // Alihkan ke laporan bila berhasil
        if ($status) $this->show($status->id);
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
        if ($status) $this->show($status->id);
        // Return false bila gagal
        else return false;
    }

    // Menghapus laporan lama
    // TODO: Hapus lampiran
    public function delete(Request $request) {
        $status = Post::where('id', $request->id)->first()->delete();
        // Alihkan ke laporan bila berhasil
        if ($status) $this->index();
        // Return false bila gagal
        else return false;
    }
}
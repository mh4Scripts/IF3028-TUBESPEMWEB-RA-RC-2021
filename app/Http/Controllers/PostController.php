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
}

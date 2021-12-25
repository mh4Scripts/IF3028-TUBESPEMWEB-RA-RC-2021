<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function index()
    {
        $data = laporan::all();
        return view('index', ['data'=>$data]);
    }
}

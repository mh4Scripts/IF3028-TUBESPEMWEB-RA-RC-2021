<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Laporan;
class LaporanController extends Controller
{
    public function list(){
        //$customers = Customer::all();
        // $customers = ["John", "K", "J"];
        $laporan = DB::select('select * from laporans');

        return view('internals.customers', [
            'customers' => $laporan,
        ]);
        // foreach ($customers as $user) {
        //     echo $user->name;
        //     echo "<br>";
        // }
    }
}
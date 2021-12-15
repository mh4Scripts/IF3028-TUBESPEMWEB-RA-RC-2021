<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailLapor;
use Illuminate\Support\Facades\Storage;

class LaporController extends Controller
{
    public function home()
    {
        return view('master/master');
    }
    public function asal()
    {
        return view('master/index');
    }

}

?>
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Laporan extends Model
{
    use SoftDeletes;

    protected $table = 'lapor';
    protected $fillable = [
        'nama_produk',
        'deskripsi'
    ];

    protected $hidden;
}

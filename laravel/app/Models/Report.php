<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\Models\User','rprtr','id');
    }

    public function attachment(){
        return $this->hasMany('App\Models\Attachment','rp_id','id');
    }
}

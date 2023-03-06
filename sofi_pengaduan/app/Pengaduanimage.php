<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduanimage extends Model
{
    public $timestamps = false;
    protected $table = 'pengaduanimage';
    protected $fillable = ['pengaduan_unique_id','image'];
}

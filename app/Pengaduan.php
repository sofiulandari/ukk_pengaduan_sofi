<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    public $timestamps = false;
    protected $table = 'pengaduans';
    protected $primaryKey = 'id_pengaduan';
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];

    public function tanggapan()
    {
        return $this->hasMany('App/Tanggapan');
    }
}



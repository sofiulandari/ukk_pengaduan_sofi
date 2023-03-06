<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    public $timestamps = false;
    protected $table = 'tanggapan';
    protected $fillable = ['id_pengaduan','tgl_tanggapan','tanggapan','nik'];

    public function pengaduan()
    {
        return $this->belongsTo('App\Pengaduan','id_pengaduan','id_pengaduan');
    }
}

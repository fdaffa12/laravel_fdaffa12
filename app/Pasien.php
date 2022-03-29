<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\RumahSakit;

class Pasien extends Model
{
    protected $fillable = [
        'nama_ps', 'alamat', 'tlp', 'rumahsakit_id'
    ];

    public function rsid()
    {
        return $this->belongsTo(RumahSakit::class, 'rumahsakit_id');
    }
}
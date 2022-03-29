<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $fillable = [
        'nama_rs', 'alamat', 'email', 'tlp',
    ];
}
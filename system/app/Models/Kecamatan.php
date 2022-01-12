<?php

namespace App\Models;

use\Models\Desa;
use\Models\Kabupaten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'Kecamatan';

    function desa(){
        return $this->hasMany(Desa::class, 'id_desa');
    }

    function kabupaten(){
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
    }
}